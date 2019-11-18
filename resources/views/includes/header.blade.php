<!-- NavBar -->
<nav class="navbar navbar-expand-md navbar-light navbar-laravel fixed-top navbar-expand-sm navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            CFG<!--{{ config('app.name', 'GRM') }}-->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('revistas') }}">Revistas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('noticias') }}">Noticias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('analisis') }}">Análisis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('previews') }}">Previews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('reportajes') }}">Reportajes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('sorteos') }}">Sorteos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('videos') }}">Videos</a>
                </li>
                @guest

                @else 
                @if ( Auth::user()->hasRole('admin') OR Auth::user()->hasRole('gestor'))
                <!--                            <li class="nav-item">
                                                <a class="nav-link" href="{{ URL::to('contenido/create') }}">Crear</a>
                                            </li>-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle bg-warning text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Crear
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">             
                        <a class="dropdown-item" href="{{ URL::to('contenido/analisis/crear') }}">Análisis</a>
                        <a class="dropdown-item" href="{{ URL::to('contenido/preview/crear') }}">Preview</a>
                        <a class="dropdown-item" href="{{ URL::to('contenido/noticia/crear') }}">Noticia</a>
                        <a class="dropdown-item" href="{{ URL::to('contenido/revista/crear') }}">Revista</a>  
                        <a class="dropdown-item" href="{{ URL::to('contenido/video/crear') }}">Video</a>  
                        <a class="dropdown-item" href="{{ URL::to('contenido/sorteo/crear') }}">Sorteo</a>  
                        <!--                                    <div class="dropdown-divider"></div>-->
                    </div>
                </li>

                @if ( Auth::user()->hasRole('admin') )
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle bg-warning text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Gestión Usuarios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ URL::to('usuarios/create') }}">Nuevo</a>
                        <a class="dropdown-item" href="{{ URL::to('usuarios') }}">Listado</a>
                        <!--                                    <div class="dropdown-divider"></div>-->
                    </div>
                </li>
                @endif
                @endif
                @endguest
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest                           
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                            {{ __('Desconectar') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<!-- NavBar -->