@extends('templete.templete')

@section('conteudo')

<main class="px-3 mt-5">
    <h3>Olá, {{Auth::user()->name}} !</h3>
    <h3>3 Ultimos abastecimentos registrados:</h3>
    <div class="container table-responsive">
        <table class="table col-8 table-dark table-sm caption-top text-white">
            <caption class="text-white text-center">Abastecimento</caption>
            <thead>
                <tr>
                        <th scope="col">Veiculo</th>
                        <th scope="col">Motorista</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Valor</th>
                    </tr>
                </thead>
                <tbody>                   
                    @foreach($abastecimentos as $abastecimento)
                        <tr>
                            <th scope="row">{{$abastecimento->placa}}</th>
                            <td>{{$abastecimento->name}}</td>
                            <td>{{$abastecimento->tipo_combustivel}}</td>
                            <td>{{$abastecimento->valor}}</td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>        
</main>

@endsection