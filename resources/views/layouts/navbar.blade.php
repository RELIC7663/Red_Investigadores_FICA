<style>
    :root {
        --primary-blue: #005A8B;
        --accent-yellow: #FFC107;
        --dark-gray: #2D2D2D;
        --hover-blue: #004A73;
        --button-blue-start:rgb(14, 41, 82);
        --button-blue-end: #7ED973;
        --button-hover-blue: #005A8B;
        --button-text-color: #fff;
    }

    .navbar {
        background: linear-gradient(90deg, #AEFCA5 0%, #7ED973 45%, #4F9B46 100%);
        box-shadow: 0 2px 15px rgba(0, 90, 139, 0.1);
        padding: 1rem 0;
        position: relative;
        min-height: 130px;
    }

    .navbar-brand {
        padding-top: 10px;
        margin-right: 30px;
    }

    .navbar-brand img {
        height: 70px;
        transition: all 0.3s ease;
    }

    .navbar-title {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        top: 1.5cm;
        text-align: center;
        width: 60%;
        padding: 0 15px;
        z-index: 1;
    }

    /* Título con color personalizado */
    .navbar-title h1 {
        font-size: 1.5rem;
        margin: 10px 0;
        color: rgba(5, 34, 69, 1);
    }

    /* Efecto de color para los menús desplegables */
    .dropdown-menu .dropdown-item {
        transition: background 0.3s ease, color 0.3s ease;
    }

    .dropdown-menu .dropdown-item:hover {
        background: linear-gradient(90deg, #4F9B46 0%, #7ED973 50%, #AEFCA5 100%);
        color: #fff;
    }

    @media (min-width: 992px) {
        .navbar-collapse {
            margin-top: 90px;
        }

        .navbar-title {
            top: 0.1cm;
        }

        .navbar-brand img {
            height: 100px;
        }

        .nav-link {
            padding: 0.75rem 1.25rem !important;
            margin: 0 0.75rem;
        }
    }

    @media (max-width: 991px) {
        .navbar-brand img {
            height: 65px;
        }

        .navbar-title h1 {
            font-size: 1rem;
            margin: 10px 0;
        }
    }

    .btn-acceder {
        background: linear-gradient(90deg, var(--button-blue-start) 0%, var(--button-blue-end) 100%);
        color: var(--button-text-color);
        border: none;
        padding: 0.4rem 0.8rem;
        /* Tamaño reducido */
        font-size: 0.75rem;
        /* Tamaño de fuente reducido */
        border-radius: 0.25rem;
        text-transform: uppercase;
        transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-acceder:hover {
        background: var(--button-hover-blue);
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo_Recortado_2.png') }}" alt="Logo RIPIS">
        </a>

        <div class="navbar-title">
            <h1 class="fw-bold">
                Red Internacional de Investigación en Procesos de Ingeniería Sostenible
            </h1>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="quienesSomosDropdown" role="button" data-bs-toggle="dropdown">
                        Quiénes Somos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/estatutos">Estatutos</a></li>
                        <li><a class="dropdown-item" href="/objetivos">Objetivos</a></li>
                        <li><a class="dropdown-item" href="/directiva">Directiva</a></li>
                        <li><a class="dropdown-item" href="/miembros">Miembros</a></li>
                        <li><a class="dropdown-item" href="/senescyt">Aprobación Senescyt</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="investigacionDropdown" role="button" data-bs-toggle="dropdown">
                        Investigación
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/Investigacion_Areas">Áreas de Investigación</a></li>
                        <li><a class="dropdown-item" href="{{ route('lineas.index') }}">Líneas de Investigación</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Eventos">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contacto">Contacto</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link btn btn-acceder" href="{{ route('login') }}">Acceder</a>
                </li>
                @else
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