<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directiva - Red Investigadores</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
        body {
            background: url("https://www.oracle.com/node/oce/storyhub/prod/api/v1.1/assets/CONT02AB929E13A1428C93AB343FCE3F5D47/native/utn-hero-banner.png") no-repeat center center fixed;
            background-size: cover;
            position: relative;
        }
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            z-index: -1;
        }
        .navbar {
            box-shadow: 0 4px 6px rgba(255, 255, 255, 0.42);
            height: 70px;
            background: rgba(220, 0, 0, 0.9);
            backdrop-filter: blur(10px);
        }
        .navbar-brand {
            display: flex;
            align-items: center;
            color: white; /* Color blanco para el logo */
        }
        .navbar-brand img {
            height: 50px; /* Tamaño del logo */
            width: auto;
        }
        .navbar-nav .nav-link {
            color: white; /* Color blanco para los enlaces del menú */
            font-weight: 500;
        }
        .navbar-nav .nav-link:hover {
            color: #f8f9fa; /* Color de hover */
            font-weight: bold;
        }
        .hero {
            height: 75vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }
        .hero-overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
        }
        .hero-content {
            position: relative;
            z-index: 2;
        }
        .hero h1, .hero p {
            color: white; /* Asegura que el texto de la sección hero sea blanco */
        }

        /* Agregado para los textos en la sección Directiva */
        .container h2 {
            color: white; /* Títulos de los miembros de la directiva en blanco */
        }
        .container p {
            color: white; /* Párrafos con los nombres de los miembros en blanco */
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center me-4" href="#">
                <img src="{{ asset('images/logo_R.PNG') }}" alt="Logo de la Red de Investigadores">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Directiva</a></li>
                    <!-- Otros enlaces -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="display-4 fw-bold">Directiva</h1>
            <p class="lead">Conozca a los miembros de nuestra directiva que lideran las iniciativas de la red.</p>
        </div>
    </div>

    <!-- Contenido de Directiva -->
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="fw-bold">Presidente</h2>
                <p>xxxxxxx</p>
                <h2 class="fw-bold">Vicepresidente</h2>
                <p>xxxxxxx</p>
                <h2 class="fw-bold">Secretario</h2>
                <p>xxxxxxxz</p>
                <h2 class="fw-bold">Tesorero</h2>
                <p>xxxxxxxxx</p>
                <h2 class="fw-bold">Vocal</h2>
                <p>xxxxxxxx</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Red Investigadores | Todos los derechos reservados</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
