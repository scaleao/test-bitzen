@extends('templete.templete')

@section('conteudo')

    <main class="px-3 mt-5">
        <div class="container justify-content-center mt-5">
            <h1 class="mb-3">Novo Abastecimento</h1>
            <form method="POST" action="{{ route('abastecimento.store') }}" class="row g-3 col-12 justify-content-center">
                {{ csrf_field() }}
                <div class="col-8">
                    <label for="veiculo_id" class="form-label">Selecione o veiculo</label>
                    <select class="form-select bg-dark text-white" aria-label="Default select example" name="veiculo_id">
                        <option class="text-white" selected>---</option>
                        @foreach ($veiculos as $veiculo)
                            <option value="{{$veiculo->id}}">{{$veiculo->placa}}</option>
                        @endforeach
                    </select>
                    @error('veiculo_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-8">
                    <label for="motorista_id" class="form-label">Selecione o motorista</label>
                    <select class="form-select bg-dark text-white" aria-label="Default select example" name="motorista_id">
                        <option class="text-white" selected>---</option>
                        @foreach ($motoristas as $motorista)
                            <option value="{{$motorista->id}}">{{$motorista->name}}</option>
                        @endforeach
                    </select>
                    @error('status')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-8">
                    <label for="tipo_combustivel" class="form-label">Tipo do Combustivel</label>
                    <select class="form-select bg-dark text-white" aria-label="Default select example" name="tipo_combustivel">
                        <option class="text-white" selected>---</option>
                        <option class="text-white" value="gasolina">Gasolina</option>
                        <option class="text-white" value="etanol">Etanol</option>
                        <option class="text-white" value="diesel">Diesel</option>
                    </select>
                    @error('tipo_combustivel')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-8">
                    <label for="quantidade" class="form-label">Quantidade</label>
                    <input type="number" class="form-control bg-dark border border-1 border-top-0 border-end-0 border-start-0 border-white text-white" id="quantidade" placeholder="5" name="quantidade">
                    @error('quantidade')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-7 mt-5 col">
                  <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </form>
        </div>
    </main>

@endsection