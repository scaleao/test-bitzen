@extends('templete.templete')

@section('conteudo')

    <main class="px-3 mt-5">
        <div class="container justify-content-center mt-5">
            <h1 class="mb-3">Cadastro Motorista</h1>
            <form method="POST" action="{{ route('motorista.store') }}" class="row g-3 col-12 justify-content-center">
                {{ csrf_field() }}
                <div class="col-8">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control bg-dark border border-1 border-top-0 border-end-0 border-start-0 border-white text-white" id="name" placeholder="João" name="name" value="{{old('name')}}">
                    @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-8">
                    <label for="num_cnh" class="form-label">Numero da CNH</label>
                    <input type="number" class="form-control bg-dark border border-1 border-top-0 border-end-0 border-start-0 border-white text-white" id="num_cnh" placeholder="00000000000" name="num_cnh" value="{{old('num_cnh')}}">
                    @error('num_cnh')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-8">
                    <label for="categoria_cnh" class="form-label">Categoria CNH</label>
                    <input type="text" class="form-control bg-dark border border-1 border-top-0 border-end-0 border-start-0 border-white text-white" placeholder="A, B, C, D, ou E" id="categoria_cnh" name="categoria_cnh" value="{{old('categoria_cnh')}}">
                    @error('categoria_cnh')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-8">
                    <label for="data_nasc" class="form-label">Data de nascimento</label>
                    <input type="date" class="form-control bg-dark border border-1 border-top-0 border-end-0 border-start-0 border-white text-white" id="data_nasc" name="data_nasc"  value="{{old('data_nasc')}}">
                    @error('data_nasc')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-8">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select bg-dark text-white" aria-label="Default select example" name="status">
                        <option class="text-white" selected>Selecione aqui um status</option>
                        <option class="text-white" value="ativo">Ativo</option>
                        <option class="text-white" value="inativo">Inativo</option>
                    </select>
                    @error('status')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-7 mt-5 col">
                  <button type="submit" class="btn btn-success">Cadastrar motorista</button>
                </div>
            </form>
        </div>
    </main>

@endsection