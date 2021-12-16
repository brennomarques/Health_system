<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <title>Sistema de saúde</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{{ asset('img/logo.png') }}}">

</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg " style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <img src="{{{ asset('img/icon.png') }}}" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="report" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Médicos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="report">
                            <li><a class="dropdown-item" href="{{ route('listDoctor') }}">Médicos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('newDoctor') }}">Cadastrar médico</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="report" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Estagiários
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="report">
                            <li><a class="dropdown-item" href="{{ route('listTrainee') }}">Estagiários</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('newTreinee') }}">Cadastrar novo estagiário</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="report" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Pacientes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="report">
                            <li><a class="dropdown-item" href="{{ route('listPatient') }}">Listar pacientes</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('newPatient') }}">Cadastar paciente</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="report" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Doadores
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="report">
                            <li><a class="dropdown-item" href="{{ route('listDonor') }}">Listar doadores</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('newDonor') }}">Cadastrar novo doador</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="report" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Doações
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="report">
                            <li><a class="dropdown-item" href="{{ route('listDonation') }}">Doações</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('newDonation') }}">Cadastrar Doações</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="report" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Banco de sangue
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="report">
                            <li><a class="dropdown-item" href="{{ route('listBloodBank') }}">Banco de sangue</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('newBloodBank') }}">Cadastar novo sangue</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="report" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Relatórios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="report">
                            <li><a class="dropdown-item" href="{{ route('reportDoctor') }}">Médicos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('reportTreinee') }}">Estagiários</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('reportDonation') }}">Doações</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('reportBloodBank') }}">Banco de sangue</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('reportDonor') }}">Doadores</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Pesquise algo" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="fixed-bottom" style="background-color: #e3f2fd;">
        <!-- Copyright -->
        <div class="text-center p-3">
            © 2021 Copyright:
            <a class="text-dark" href="#">Sistema de saúde S/A</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>
