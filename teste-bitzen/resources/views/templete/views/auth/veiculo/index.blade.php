@extends('templete.templete')

@section('conteudo')

    @if($message)
        <div class="alert alert-success alert-dismissible fade show border border-success" role="alert">
            {{$message}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="d-flex flex-row justify-content-center mb-5">
        <div class="p2">
            <a class="btn btn-success" href="{{ route('veiculo.create') }}">Novo Veiculo</a>
        </div>
    </div>
    <div class="container table-responsive">
        <table class="table col-8 table-dark table-sm caption-top text-white">
            <caption class="text-white text-center">Veiculos</caption>
            <thead>
                <tr>
                    <th scope="col"># ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Tanque</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>                   
                @foreach($veiculos as $veiculo)
                    <tr>
                        <th scope="row">{{$veiculo->id}}</th>
                        <td>{{$veiculo->placa}}</td>
                        <td>{{$veiculo->tipo_combustivel}}</td>
                        <td>{{$veiculo->capacidade}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('veiculo.edit', $veiculo->id) }}">Editar</a>
                            <a class="btn btn-danger" href="{{ route('veiculo.destroy',  $veiculo->id) }}">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection