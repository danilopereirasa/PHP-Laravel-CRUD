@extends('layouts.app')

@section('content')
@guest
    <script>window.location = "/login";</script>
@endguest

<div class="container">
    <main class="col-12">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Empresas</h1>
            <a href="{{route('business.create')}}" type="button" class="btn btn-b2wAme btn-md"><i class="fa fa-plus"></i> Adicionar</a>
        </div>

        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col" class="w-50">Nome</th>
                <th scope="col">Data de Criação</th>
                <th scope="col">Status</th>
                <th scope="col" class="text-right">Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($business as $company)
            <tr>
                <td>{{$company->idEmpresa}}</td>
                <td>{{$company->nome}}</td>
                <td>{{date('d/m/Y H:m:s', strtotime($company->created_at))}}</td>
                <td>
                    <?php
                    $company->idSituacao == 1?$situacao = '<span class="badge badge-success">Ativo</span>':$situacao = '<span class="badge badge-danger">Inativo</span>';
                    echo $situacao;
                    ?>
                </td>
                <td class="text-right">
                    <a href="{{Route('business.show', [$company->idEmpresa])}}" class="btn btn-sm btn-b2wAme"><i class="fa fa-eye"></i></a>
                    <a href="{{Route('business.edit', [$company->idEmpresa])}}" class="btn btn-sm btn-outline-b2wAme"><i class="fas fa-pencil-alt"></i></a>
                    {{--<a href="" class="btn btn-sm btn-outline-b2wAme"><i class="fas fa-user"></i></a>--}}
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

    </main>
</div>

@endsection
