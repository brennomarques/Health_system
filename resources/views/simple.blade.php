<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>Sistema de saúde</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Sistema de saúde</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Médicos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Doadores</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Banco de sangue</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Estagiários</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Doações</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('listPatient')}}">Pacientes</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Menu
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('listPatient')}}">Listar Pacientes</a></li>
                    <li><a class="dropdown-item" href="{{route('newPatient')}}">Cadastar Paciente</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Médicos</a></li>
                    <li><a class="dropdown-item" href="#">Doadores</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Banco de sangue</a></li>
                    <li><a class="dropdown-item" href="#">Estagiários</a></li>
                    <li><a class="dropdown-item" href="#">Doações</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Dashboard</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Pesquise algo" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Pesquisar</button>
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