<!--Navbar -->
<nav class="navbar sticky-top navbar-expand-lg navbar-dark " style="background-color: #56A3A6">
    <a class="navbar-brand" href="#"><img class="logo" src="{{ asset('img/logo.png') }}" alt="Turismo más"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
        aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categorias') }}">
                    Categorías
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('empresas') }}">
                    Empresas
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> Profile </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                    <a class="dropdown-item" href="#">Mi perfil</a>
                    <a class="dropdown-item" href="#">Cerrar sesión</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!--/.Navbar -->
