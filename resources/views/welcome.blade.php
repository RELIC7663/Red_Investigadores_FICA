<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Investigadores</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
        /* Fondo General con Opacidad */
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
            /* Menos opaco */
            z-index: -1;
        }

        /* Navbar */
        .navbar {
            box-shadow: 0 4px 6px rgba(255, 255, 255, 0.42);
            height: 70px;
            background: rgba(220, 0, 0, 0.9);
            /* Rojo con transparencia */
            backdrop-filter: blur(10px);
        }

        .navbar-brand img {
            height: 50px;
            /* Tamaño del logo */
            width: auto;
        }

        .navbar-nav {
            font-weight: 500;
            font-size: 18px;
        }

        .navbar-nav .nav-link {
            padding: 10px 15px;
            color: white;
            transition: all 0.3s ease-in-out;
        }

        .navbar-nav .nav-link:hover {
            color: rgb(255, 255, 255);
            font-weight: bold;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
        }

        .navbar-nav .btn-acceder {
            background-color: white;
            color: rgb(220, 0, 0);
            border-radius: 5px;
            font-weight: bold;
        }

        .navbar-nav .btn-acceder:hover {
            background-color: rgb(255, 255, 255);
            color: rgb(180, 0, 0);
        }

        /* Hero Section */
        .hero {
            height: 75vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            position: relative;
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

        /* Íconos de Redes Sociales */
        .social-icons i {
            font-size: 50px;
            display: block;
            margin-bottom: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .social-icons i:hover {
            transform: scale(1.1);
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
                    <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>

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
                            <li><a class="dropdown-item" href="#">Áreas de Investigación</a></li>
                            <li><a class="dropdown-item" href="#">Líneas de Investigación</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="#">Eventos</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-acceder px-3" href="#">Acceder</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Hero Section (Carrusel) -->
    <div id="heroCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="hero">
                    <div class="hero-overlay"></div>
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold">VISIÓN</h1>
                        <p class="lead">Ser una red de referencia global en ingeniería de procesos sostenibles, impulsando la innovación, la investigación y la formación de futuros líderes en el sector.</p>
                        <div class="d-flex justify-content-center my-4">
                            <img src="REDU.png" alt="Logo RIPIS" class="me-2" style="max-height: 250px;" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="hero">
                    <div class="hero-overlay"></div>
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold">MISIÓN</h1>
                        <p class="lead">Promover el intercambio de conocimientos, la colaboración internacional y el desarrollo de tecnologías sostenibles que contribuyan al bienestar de las comunidades y al cuidado del medio ambiente.</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- Sección de Redes Sociales -->
    <div class="container my-5">
        <div class="row text-center">
            <div class="col-md-4 social-icons">
                <a href="https://www.facebook.com/" target="_blank" class="text-primary">
                    <i class="bi bi-facebook"></i></a>
            </div>
            <div class="col-md-4 social-icons">
                <a href="https://www.instagram.com/" target="_blank" class="text-danger">
                    <i class="bi bi-instagram"></i></a>
            </div>
            <div class="col-md-4 social-icons">
                <a href="https://www.linkedin.com" target="_blank" class="text-info">
                    <i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Red Investigadores | Todos los derechos reservados</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script para hover en el dropdown -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var dropdowns = document.querySelectorAll(".nav-item.dropdown");
            dropdowns.forEach(function(dropdown) {
                dropdown.addEventListener("mouseover", function() {
                    this.querySelector(".dropdown-menu").classList.add("show");
                });
                dropdown.addEventListener("mouseleave", function() {
                    this.querySelector(".dropdown-menu").classList.remove("show");
                });
            });
        });
    </script>

</body>

</html>