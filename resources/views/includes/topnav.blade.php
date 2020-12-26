<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            {{--Zona Genérica--}}
            <li class="nav-item active">
                <a class="nav-link" href="#">Public link <span class="sr-only">(current)</span></a>
            </li>
            @auth
            {{-- Zona para Autenticados --}}
                    <li class="nav-item">
                        <a class="nav-link" href="#">Admin Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Computadores
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Máquinas</a>
                        <a class="dropdown-item" href="#">Intervenções</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Marcas</a>
                        <a class="dropdown-item" href="#">Características</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
            @endauth
        </ul>

      {{--Zona Contaxto Autenticado LOGIN/LOGOUT Perfil--}}
      <ul class="navbar-nav ml-auto">
        @if (Route::has('login'))
            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Conta ({{Auth::user()->name}})</a>
                    <div class="dropdown-menu" aria-labelldby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('dashboard')}}">Dashbord</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <form method="post" action="{{route('logout')}}">
                            @csrf
                            <a href="{{route('logout')}}" class="dropdown-item" onclick="event.preventDefault(); closest('form').submit();">Logout</a>
                        </form>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Entrar</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Registar</a>
                    </li>
                @endif
            @endauth
        @endif
      </ul>
    </div>
</nav>
