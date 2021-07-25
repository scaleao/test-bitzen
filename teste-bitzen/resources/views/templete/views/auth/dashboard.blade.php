@extends('templete.templete')

@section('conteudo')

<main class="px-3 mt-5">
    <h3>Olá, {{Auth::user()->name}} !</h3>
    <h3>Ultimos abastecimentos registrados</h3>        
</main>

@endsection