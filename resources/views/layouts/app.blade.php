<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red de Investigadores</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- Agrega aquí tus estilos y scripts adicionales -->
    <style>
        /* Fondo General con Opacidad */
        body {
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
            background: linear-gradient(145deg, rgba(208, 255, 205, 0.98) 0%, rgba(109, 135, 247, 0.98) 100%);
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

        @media (max-width: 991.98px) {
            .navbar-collapse.show {
                background-color: rgba(255, 255, 255, 1) !important;
                /* Fondo blanco sólido */
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                /* Sombra ligera */
                padding: 10px;
                border-radius: 5px;
            }

            .navbar-collapse.show .nav-link {
                color: #000 !important;
                /* Enlaces en negro */
            }

            .navbar-collapse.show .nav-link:hover {
                background-color: rgba(220, 0, 0, 0.8) !important;
                /* Fondo rojo al pasar */
                color: #fff !important;
                /* Texto blanco al pasar */
                border-radius: 5px;
            }


        }

        .navbar-nav .nav-link {
            color: black !important;
        }

        .navbar-nav .nav-link:hover {
            background-color: rgba(0, 0, 0, 0.1) !important;
            color: black !important;
        }

        .hero-overlay {
            background: rgba(255, 255, 255, 0.6) !important;
        }

        .hero-content h1,
        .hero-content p {
            color: black !important;
        }


        /*Estilos miembros.blade.php */


        .tarjeta-miembro-horizontal {
            background: #f1f1f1;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
            transition: transform 0.2s ease;
            height: 100%;
        }

        .tarjeta-miembro-horizontal:hover {
            transform: translateY(-3px);
        }

        .foto-horizontal {
            flex: 0 0 130px;
            max-width: 130px;
        }

        .foto-horizontal img {
            width: 100%;
            height: auto;
            object-fit: contain;
            background-color: transparent;
            border-radius: 8px;
            display: block;
        }

        .btn-miembro {
            background-color: #343a40;
            color: white;
            font-size: 14px;
            font-weight: 600;
            padding: 6px 14px;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            transition: background 0.3s ease;
        }

        .btn-miembro:hover {
            background-color: #212529;
        }

        /* ==== Estilos ESPECÍFICOS para vista Directiva ==== */
        .vista-directiva .directiva-card {
            background-color: #f8f9fa;
            border-radius: 14px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            display: flex;
            align-items: center;
            padding: 20px;
            margin-bottom: 30px;
            transition: transform 0.3s ease;
        }

        .vista-directiva .directiva-card:hover {
            transform: translateY(-4px);
        }

        .vista-directiva .directiva-foto {
            flex: 0 0 140px;
            max-width: 140px;
            text-align: center;
        }

        .vista-directiva .directiva-foto img {
            width: 100%;
            height: auto;
            border-radius: 12px;
            object-fit: contain;
            background: transparent;
        }

        .vista-directiva .directiva-info {
            flex: 1;
            margin-left: 25px;
        }

        .vista-directiva .directiva-info .cargo {
            font-size: 20px;
            font-weight: 800;
            color: #002147;
            margin-bottom: 5px;
        }

        .vista-directiva .directiva-info .nombre {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin-bottom: 6px;
        }

        .vista-directiva .directiva-info .email {
            font-size: 15px;
            color: #666;
            margin-bottom: 8px;
        }

        .vista-directiva .btn-orcid {
            background-color: #212529;
            color: white;
            font-size: 14px;
            padding: 6px 12px;
            border-radius: 6px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .vista-directiva .btn-orcid:hover {
            background-color: #000;
        }


        /* Estilos para la sección de Objetivos */

        .ripis-objectives-section {
            padding: 80px 0;
        }

        .ripis-objective-card {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 33, 71, 0.08);
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 33, 71, 0.05);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 30px;
        }

        .ripis-objective-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 33, 71, 0.12);
        }

        .ripis-objective-icon {
            width: 80px;
            height: 80px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 102, 162, 0.1);
            border-radius: 50%;
        }

        .ripis-objective-icon i {
            font-size: 40px;
            color: var(--secondary-color);
        }

        

        .ripis-objective-text h3 {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        .ripis-objective-text p {
            color: #666;
            line-height: 1.6;
        }

        .ripis-objectives-header {
            color: var(--primary-color);
            margin-bottom: 50px;
            text-align: center;
        }

        .ripis-objectives-header h1 {
            font-weight: 800;
            position: relative;
            display: inline-block;
        }

        .ripis-objectives-header h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background-color: var(--secondary-color);
        }

        @media (max-width: 768px) {
            .ripis-objectives-section {
                padding: 40px 0;
            }

            .ripis-objective-card {
                margin-bottom: 20px;
            }
        }
    </style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <!-- Incluir el Navbar -->
    @include('layouts.navbar')

    <!-- Contenido principal -->
    <div class="container mt-5">
        @yield('content')
    </div>

    <!--pie de página u otros elementos comunes  -->
    @include('layouts.footer')

</body>

</html>
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
