<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">bitzen </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            @if(!Auth::user())
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.create') }}">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.signin') }}">ENTRAR</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('motorista.index') }}">Motoristas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Veiculos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Abastecimentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger btn-sm text-white" href="{{ route('user.logout') }}">SAIR</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>