@extends('layouts.app')

@section('content')
@guest
    <script>window.location = "/login";</script>
@endguest

<div class="container">
    <main>
        <form action="{{ route('business.update', $business->idEmpresa) }}" method="post">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"><a href="{{route('business.index')}}" class="text-b2wAme"><i class="far fa-arrow-alt-circle-left"></i></a> Editar Empresa</h1>
                <button type="submit" class="btn btn-b2wAme">
                    <i class="fas fa-pencil-alt"></i> Editar
                </button>
            </div>

            @csrf
            @method('put')

            <img src="{{asset('site/img/sem-foto.gif')}}" class="img-fluid img-thumbnail p-1 float-left" style="width: 200px">
            <div class="row">
                <div class="col-6 pb-3">
                    <label for="nome"><b>Nome</b></label><br>
                    <input type="text" name="nome" id="nome" class="form-control" value="{{$business->nome}}">
                </div>
                <div class="col-6 pb-3">
                    <label for="endereco"><b>Endereco</b></label><br>
                    <input type="text" name="endereco" id="endereco" class="form-control"value="{{$business->endereco}}">
                </div>
                <div class="col-6 pb-3">
                    <label for="website"><b>Site</b></label><br>
                    <input type="text" name="website" id="website" class="form-control" value="{{$business->website}}">
                </div>
                <div class="col-6 pb-3">
                    <label for="email"><b>Email</b></label><br>
                    <input type="text" name="email" id="email" class="form-control" value="@if(empty($business->usuario->email))@else{{$business->usuario->email}}@endif">
                </div>
                <div class="col-6 pb-3">
                    <label for="password"><b>Senha</b></label><br>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
            </div>
        </form>
    </main>
</div>

@endsection
