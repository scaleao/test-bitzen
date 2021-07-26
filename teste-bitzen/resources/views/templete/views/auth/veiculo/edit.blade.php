@extends('templete.templete')

@section('conteudo')

<main class="px-3 mt-5">
        <div class="container justify-content-center mt-5">
            <h1 class="mb-3">Atualizar Veiculo</h1>
            <form method="POST" action="{{ route('veiculo.update',$veiculo->id) }}" class="row g-3 col-12 justify-content-center">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="col-8">
                    <label for="placa" class="form-label">Placa</label>
                    <input type="text" class="form-control bg-dark border border-1 border-top-0 border-end-0 border-start-0 border-white text-white" id="placa" placeholder="ABC1234" name="placa" value="{{$veiculo->placa}}">
                    @error('placa')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-8">
                    <label for="name_veiculo" class="form-label">Nome Veiculo</label>
                    <input type="text" class="form-control bg-dark border border-1 border-top-0 border-end-0 border-start-0 border-white text-white" id="name_veiculo" placeholder="Fuscao do Dirceu" name="name_veiculo" value="{{$veiculo->name_veiculo}}">
                    @error('name_veiculo')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-8">
                    <label for="tipo_combustivel" class="form-label">Tipo do Combustivel</label>
                    <select class="form-select bg-dark text-white" aria-label="Default select example" name="tipo_combustivel">
                        <option class="text-white" selected>Selecione aqui o combustivel</option>
                        <option class="text-white" value="gasolina">Gasolina</option>
                        <option class="text-white" value="etanol">Etanol</option>
                        <option class="text-white" value="diesel">Diesel</option>
                    </select>
                    @error('tipo_combustivel')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-8">
                    <label for="fabricante" class="form-label">Fabricante</label>
                    <input type="text" class="form-control bg-dark border border-1 border-top-0 border-end-0 border-start-0 border-white text-white" placeholder="Volkswagen" id="fabricante" name="fabricante"  value="{{$veiculo->fabricante}}">
                    @error('fabricante')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-8">
                    <label for="ano_fabricacao" class="form-label">Ano de Fabricação</label>
                    <input type="date" class="form-control bg-dark border border-1 border-top-0 border-end-0 border-start-0 border-white text-white" id="ano_fabricacao" name="ano_fabricacao"  value="{{$veiculo->ano_fabricacao}}">
                    @error('ano_fabricacao')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-8">
                    <label for="capacidade" class="form-label">Capacidade do tanque</label>
                    <input type="number" class="form-control bg-dark border border-1 border-top-0 border-end-0 border-start-0 border-white text-white" placeholder="90" id="capacidade" name="capacidade"  value="{{$veiculo->capacidade}}">
                    @error('capacidade')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                 <div class="col-8">
                    <label for="observacao" class="form-label">Observações</label>
                    <input type="text" class="form-control bg-dark border border-1 border-top-0 border-end-0 border-start-0 border-white text-white" id="observacao" name="observacao"  value="{{$veiculo->observacao}}">
                </div>
                <div class="col-7 mt-5 col">
                  <button type="submit" class="btn btn-success">Atualizar veiculo</button>
                </div>
            </form>
        </div>
    </main>

@endsection