<?php

namespace App\Http\Controllers;

use App\Config\Constants;
use App\Models\empresas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use \Exception;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $business = empresas::all();
        return view('listAllBusiness',['business' => $business]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newBusiness');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{

            if(!empty(User::where('email',$request->email)->where('idTipoUsuario', Constants::UserType_Empresa)->first())){
                throw new Exception('Já existe um usuário com este email.', 200);
            }

            DB::beginTransaction();

            $business = new empresas();
            $business->nome = $request->nome;
            $business->endereco = $request->endereco;
            $business->website = $request->website;
            $business->idSituacao = 1;
            $business->save();

            $user = new User();
            $user->name = $request->nome;
            $user->email = $request->email;
            $user->idTipoUsuario = Constants::UserType_Empresa;
            $user->idRelacao = $business->idEmpresa;
            $user->password = Hash::make($request->password);
            $user->idSituacao = 1;
            $user->save();

            DB::commit();

            return redirect()->route('business.index');
        }catch (Exception $e){
            DB::rollBack();
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function show($idEmpresa)
    {
        $business = empresas::with('empregados')->where('idEmpresa', $idEmpresa)->first();
        return view('viewBusiness',['business' => $business]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function edit($idEmpresa)
    {
        $business = empresas::with(['empregados','usuario' => function ($query) {
            $query->where('idTipoUsuario', Constants::UserType_Empresa);
        }])->where('idEmpresa', $idEmpresa)->first();

        return view('editBusiness',['business'=>$business]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idEmpresa)
    {
        try{
            if(!empty(User::where('email',$request->email)->where('idTipoUsuario', Constants::UserType_Empresa)
                ->whereNotIn('idRelacao',[$idEmpresa])->first())){
                throw new Exception('Já existe um usuário com este email.', 200);
            }

            DB::beginTransaction();

            $business['nome'] = $request->nome;
            $business['endereco'] = $request->endereco;
            $business['website'] = $request->website;

            empresas::where('idEmpresa', $idEmpresa)->update($business);


            $user['name'] = $request->nome;
            $user['email'] = $request->email;
            $user['idTipoUsuario'] = Constants::UserType_Empresa;

            if(!empty($request->password)) {
                $user['password'] = Hash::make($request->password);
            }

            User::where('idTipoUsuario', Constants::UserType_Empresa)->where('idRelacao',$idEmpresa)
                ->update($user);

            DB::commit();

            return redirect()->route('business.index');
        }catch (Exception $e){
            DB::rollBack();
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function destroy(empresas $empresas)
    {
        //
    }
}
