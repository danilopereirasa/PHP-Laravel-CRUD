<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="ModalViewBusinessEmpregados" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Empregados - {{$business->nome}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">prontuario</th>
                        <th scope="col">email</th>
                        <th scope="col">telefone</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($business->empregados as $empregados)
                        <tr>
                            <td>{{$empregados->nome}}</td>
                            <td>{{$empregados->sobrenome}}</td>
                            <td>{{$empregados->prontuario}}</td>
                            <td>{{$empregados->email}}</td>
                            <td>{{$empregados->telefone}}</td>
                            <td><?php
                                $empregados->idSituacao == 1?$situacao = '<span class="badge badge-success">Ativo</span>':$situacao = '<span class="badge badge-danger">Inativo</span>';
                                echo $situacao;
                                ?></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
