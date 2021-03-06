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
                @guest
                    @include('includes.menugenerico')
                @else 
               @if ( Auth::user()->hasRole('user'))
                    @include('includes.menugenerico')
               @endif
               
                @if ( Auth::user()->hasRole('admin') OR Auth::user()->hasRole('gestor'))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Opciones Menú
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">  
                        <a class="nav-link" href="{{ URL::to('contenidos/4') }}">Revistas</a>
                        <a class="nav-link" href="{{ URL::to('contenidos/5') }}">Noticias</a>
                        <a class="nav-link" href="{{ URL::to('contenidos/1') }}">Análisis</a>
                        <a class="nav-link" href="{{ URL::to('contenidos/2') }}">Previews</a>
                        <a class="nav-link" href="{{ URL::to('contenidos/7') }}">Reportajes</a>
                        <a class="nav-link" href="{{ URL::to('contenidos/8') }}">Sorteos</a>
                        <a class="nav-link" href="{{ URL::to('contenidos/6') }}">Videos</a>
                        <a class="nav-link" href="{{ URL::to('contenidos/3') }}">Entrevistas</a>
                    </div>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle bg-warning text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Crear
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">             
                        <a class="dropdown-item" href="{{ URL::to('contenido/analisis/create') }}">Análisis</a>
                        <a class="dropdown-item" href="{{ URL::to('contenido/create/2') }}">Preview</a>
                        <a class="dropdown-item" href="{{ URL::to('contenido/create/5') }}">Noticia</a>
                        <a class="dropdown-item" href="{{ URL::to('contenido/revista/create') }}">Revista</a>  
                        <a class="dropdown-item" href="{{ URL::to('contenido/create/6') }}">Video</a>  
                        <a class="dropdown-item" href="{{ URL::to('contenido/sorteo/create') }}">Sorteo</a>  
                        <!--                                    <div class="dropdown-divider"></div>-->
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle bg-warning text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mantenimiento
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">             
                        <a class="dropdown-item" href="{{ URL::to('mantenimiento/desarrolladoras') }}">Desarrolladora/distribuidora</a>
                        <a class="dropdown-item" href="{{ URL::to('mantenimiento/etiquetas') }}">Etiquetas</a>
                        <!--                                    <div class="dropdown-divider"></div>-->
                    </div>
                </li>


                @endif
                 @if ( Auth::user()->hasRole('admin') )
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle bg-warning text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Gest. Usuarios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ URL::to('usuarios/create') }}">Nuevo</a>
                        <a class="dropdown-item" href="{{ URL::to('mantenimiento/usuarios') }}">Listado</a>
                        <!--                                    <div class="dropdown-divider"></div>-->
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-warning text-dark" href="{{ URL::to('admin/estadisticas') }}">Estadisticas</a>
                </li>
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