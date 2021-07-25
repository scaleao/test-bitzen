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
            <a class="btn btn-success" href="{{ route('abastecimento.create') }}">Novo Abastcimento</a>
        </div>
    </div>
    <div class="container table-responsive">
        <table class="table col-8 table-dark table-sm caption-top text-white">
            <caption class="text-white text-center">Abastecimentos</caption>
            <thead>
                <tr>
                    <th scope="col">Veiculo</th>
                    <th scope="col">Motorista</th>
                    <th scope="col">Data</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Valor</th>
                </tr>
            </thead>
            <tbody>                   
                @foreach($abastecimentos as $abastecimento)
                    <tr>
                        <th scope="row">{{$abastecimento->placa}}</th>
                        <td>{{$abastecimento->name}}</td>
                        <td>{{$abastecimento->created_at}}</td>
                        <td>{{$abastecimento->tipo_combustivel}}</td>
                        <td>{{$abastecimento->quantidade}}</td>
                        <td>{{$abastecimento->valor}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection