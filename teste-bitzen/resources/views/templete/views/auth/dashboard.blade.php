@extends('templete.templete')

@section('conteudo')

<main class="px-3 mt-5">
    @if($message)
        <div class="alert alert-success alert-dismissible fade show border border-success" role="alert">
            {{$message}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h3>{{Auth::user()->name}}</h3>
    <h3>Ultimos abastecimentos registrados</h3>        
</main>

@endsection