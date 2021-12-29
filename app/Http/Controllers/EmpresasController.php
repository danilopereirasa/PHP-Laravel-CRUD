<?php

namespace App\Http\Controllers;

use App\Models\empresas;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(empresas $empresas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empresas $empresas)
    {
        //
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
