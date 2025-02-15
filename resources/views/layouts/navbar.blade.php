<!-- resources/views/layouts/navbar.blade.php -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center me-4" href="#">
            <img src="{{ asset('images/logo_Recortado_2.PNG') }}" alt="Logo de la Red de Investigadores">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/">Inicio</a></li>

                <!-- Menú desplegable Quiénes Somos -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="quienesSomosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Quiénes Somos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="quienesSomosDropdown">
                        <li><a class="dropdown-item" href="/estatutos">Estatutos</a></li>
                        <li><a class="dropdown-item" href="/objetivos">Objetivos</a></li>
                        <li><a class="dropdown-item" href="/directiva">Directiva</a></li>
                        <li><a class="dropdown-item" href="/miembros">Miembros</a></li>
                        <li><a class="dropdown-item" href="/senescyt">Aprobación Senescyt</a></li>
                    </ul>
                </li>

                <!-- Menú desplegable Investigación -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="investigacionDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Investigación
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="investigacionDropdown">
                        <li><a class="dropdown-item" href="/Investigacion_Areas">Áreas de Investigación</a></li>
                        <li><a class="dropdown-item" href="{{ route('lineas.index') }}">Líneas de Investigación</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="/Eventos">Eventos</a></li>
                <li class="nav-item"><a class="nav-link" href="/contacto">Contacto</a></li>

                <!-- Mostrar "Acceder" solo si el usuario NO está autenticado -->
                @guest
                <li class="nav-item"><a class="nav-link btn btn-acceder px-3" href="{{ route('login') }}">Acceder</a></li>
                @else
                <!-- Mostrar nombre del usuario con un menú desplegable -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="/profile">Mi Perfil</a></li>
                        <li><a class="dropdown-item" href="/settings">Configuración</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        @role('administrador')
                        <li><a class="dropdown-item" href="{{ route('user.index') }}">Administrar Usuarios</a></li>
                        @endrole
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Cerrar Sesión</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest

            </ul>
        </div>
    </div>
</nav>