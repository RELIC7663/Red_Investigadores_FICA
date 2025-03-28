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

        /* Directiva */

        /* Contenedor general */
        .directivas-container {
            padding: 50px 20px;
            max-width: 1100px;
            margin: 0 auto;
        }

        /* Título principal */
        .titulo_H1 {
            text-align: center;
            font-size: 32px;
            font-weight: 800;
            color: #000;
            text-transform: uppercase;
            margin-bottom: 50px;
            position: relative;
            font-family: 'Segoe UI', sans-serif;
        }

        .titulo_H1::after {
            content: "";
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: #DC0000;
            border-radius: 5px;
        }

        /* Título del cargo */
        .titulo {
            text-align: center;
            font-size: 22px;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
            position: relative;
            font-family: 'Segoe UI', sans-serif;
        }

        .titulo::after {
            content: "";
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: #DC0000;
            border-radius: 3px;
        }

        /* Tarjeta horizontal estilo moderno */
        .tarjeta-miembro-estetica {
            background-color: #fff;
            border-radius: 10px;
            display: flex;
            align-items: center;
            padding: 20px;
            margin: 0 auto 60px auto;
            max-width: 900px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .tarjeta-miembro-estetica:hover {
            transform: translateY(-3px);
        }

        .foto-miembro {
            flex: 0 0 130px;
            max-width: 130px;
            margin-right: 20px;
        }

        .foto-miembro img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 0;
        }

        /* Info */
        .info-miembro {
            flex: 1;
        }

        .info-miembro h5 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 5px;
            color: #222;
        }

        .info-miembro p {
            font-size: 15px;
            margin-bottom: 10px;
            color: #555;
        }

        /* Botón ORCID */
        .orcid-btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 14px;
            padding: 6px 12px;
            background: white;
            border: 2px solid #2d312f;
            border-radius: 6px;
            text-decoration: none;
            color: #2d312f;
            transition: all 0.3s ease;
        }

        .orcid-btn:hover {
            background-color: #2d312f;
            color: white;
        }

        .orcid-icon {
            width: 20px;
            height: 20px;
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
