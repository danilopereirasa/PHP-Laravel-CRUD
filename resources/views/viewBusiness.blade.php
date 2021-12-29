@extends('layouts.app')

@section('content')
@guest
    <script>window.location = "/login";</script>
@endguest

<div class="container">
    <main class="col-12">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Empresas</h1>
            <span class="float-right"><button class="btn btn-outline-b2wAme" data-toggle="modal" data-target="#ModalViewBusinessEmpregados">Visualizar Empregados <i class="fa fa-user"></i></button></span>

        </div>

        <img src="{{asset('site/img/sem-foto.gif')}}" class="img-fluid img-thumbnail p-1 float-left" style="width: 200px">
        <div class="row">
            <div class="col-6 pb-3">
                <small class="pr-4"><b>Data de Criação</b><br>
                    {{$business->created_at}}</small>
            </div>
            <div class="col-6 pb-3">
                <small><b>Data de Alteração</b><br>
                    {{$business->updated_at}}</small>
            </div>

            <div class="col-6 pb-3">
                <label for="nome"><b>Nome</b></label><br>
                <b class="text-b2wAme">{{$business->nome}}</b>
            </div>
            <div class="col-6 pb-3">
                <label for="endereco"><b>Endereco</b></label><br>
                {{$business->endereco}}
            </div>
            <div class="col-6 pb-3">
                <label for="endereco"><b>Site</b></label><br>
                {{$business->website}}
            </div>
        </div>

    </main>
</div>

@include('modal.modalViewBusiness')

@endsection
