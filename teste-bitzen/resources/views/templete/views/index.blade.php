@extends('templete.templete')

@section('conteudo')

    <main class="px-3 mt-5">
        <img src="./img/logo.png" alt="bitzen_logo.png" class="img-fluid">
            <p>Endereço: Av. das Palmeiras, 40 – Maringá – PR</p>
            <p>Contato: (44) 3246-4144 / (44) 99999-8888 (whats) - sac@btztransports.com.br</p>
            <p>Horário de atendimento: seg/sex – 08h00 – 22h00</p>
        <p class="lead text-center  mt-5">
            <!--<a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white text-dark">Cadastrar vendedor <i class="fas fa-sign-in-alt"></i></a>-->
            <a href="{{ route('home.signin') }}" class="btn btn-lg fw-bold border-white text-white" style="background-image: linear-gradient(to bottom right, #7EB464, #00A1B2);">Entrar <i class="fas fa-sign-in-alt"></i></a>
            
        </p>
    </main>

@endsection