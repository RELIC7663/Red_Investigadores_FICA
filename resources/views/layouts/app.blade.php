<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red de Investigadores</title>
    <!-- Agrega aquí tus estilos y scripts adicionales -->
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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</head>
<body>

    <!-- Incluir el Navbar -->
    @include('layouts.navbar')

    <!-- Contenido principal -->
    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- Agregar aquí el pie de página u otros elementos comunes si es necesario -->
</body>
</html>
