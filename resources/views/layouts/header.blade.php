{{-- <nav class="navbar bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">Navbar</a> --}}
{{-- <a href="" class="btn-sm btn-primary">Logout</a> --}}

{{-- <form action="{{ route('logout') }}" method="POST">
            @csrf

            <button type="submit" class="btn-sm btn-primary">Logout</button>
        </form> --}}
{{--     </div>
</nav> --}}

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="{{ route('index.home') }}">
            <img src="{{ asset('admin-assets/dist/img/extintor.png') }}" alt="Logo" width="30" height="40">
            <span class="brand-text font-weight-light text-danger"><b>Fire</b>Prevention</span>
        </a>
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('interventions.index') }}">
                        <i class="far fa-fw fa-clipboard"></i>
                        Intervenções
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown">
                        <i class="fas fa-columns"></i>
                        Tabelas
                    </a>

                    <ul class="dropdown-menu border-0 shadow">
                        <li>
                            <a class="dropdown-item" href="{{ route('users.index') }}">
                                <i class="fa fa-users"></i>
                                Funcionários
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('vehicles.index') }}">
                                <i class="fas fa-truck-pickup"></i>
                                Veículos
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('fluids.index') }}">
                                <i class="fas fa-vial"></i>
                                Tipos de Fluído
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('index.home') }}">
                                <i class="fas fa-chart-line"></i>
                                Gráficos
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav ml-auto order-1 order-md-3 navbar-no-expand me-5">
            <li>
                {{-- <a class="btn btn-default btn-flat float-reght btn-block" href="{{ route('index') }}">
                    <i class="fa fa-fw fa-power-off text-red"></i>
                    Sair
                </a> --}}
                <form action="{{ route('logout') }}" method="POST" id="logout">
                    @csrf

                    <button class="btn btn-default btn-flat float-reght btn-block">
                        <i class="fa fa-fw fa-power-off text-red"></i>
                        Sair
                    </button>
                </form>
            </li>
        </ul>
    </div>
</nav>
