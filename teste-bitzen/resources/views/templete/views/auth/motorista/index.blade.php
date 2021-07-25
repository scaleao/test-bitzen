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
            <a class="btn btn-success" href="{{ route('motorista.create') }}">Novo Motorista</a>
        </div>
    </div>
    <div class="container table-responsive">
        <table class="table col-8 table-dark table-sm caption-top text-white">
            <caption class="text-white text-center">Motoristas</caption>
            <thead>
                <tr>
                    <th scope="col"># ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Nº CNH</th>
                    <th scope="col">Status</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>                   
                @foreach($motoristas as $motorista)
                    <tr>
                        <th scope="row">{{$motorista->id}}</th>
                        <td>{{$motorista->name}}</td>
                        <td>{{$motorista->num_cnh}}</td>
                        <td>{{$motorista->status}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('motorista.edit', $motorista->id) }}">Editar</a>
                            <a class="btn btn-danger" href="{{ route('motorista.destroy',  $motorista->id) }}">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection