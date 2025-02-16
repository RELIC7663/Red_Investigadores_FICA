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
        @media (max-width: 991.98px) {
            .navbar-collapse.show {
                background-color: rgba(255, 255, 255, 1) !important; /* Fondo blanco sólido */
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra ligera */
                padding: 10px;
                border-radius: 5px;
            }

            .navbar-collapse.show .nav-link {
                color: #000 !important; /* Enlaces en negro */
            }

            .navbar-collapse.show .nav-link:hover {
                background-color: rgba(220, 0, 0, 0.8) !important; /* Fondo rojo al pasar */
                color: #fff !important; /* Texto blanco al pasar */
                border-radius: 5px;
            }

            
        }
        .navbar-nav .nav-link {
            color: black !important;
        }

        .navbar-nav .nav-link:hover {
            background-color: rgba(0,0,0,0.1) !important;
            color: black !important;
        }

        .hero-overlay {
            background: rgba(255, 255, 255, 0.6) !important;
        }

        .hero-content h1, .hero-content p {
            color: black !important;
        }


        /*Estilos miembros.blade.php */
        
    /* Tarjeta de Miembro */    
.tarjeta-miembro {
    background: #ffffff;
    border-radius: 15px;
    padding: 20px;
    text-align: center;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease-in-out;
    max-width: 300px;
    margin: 20px auto;
}

/* Fondo gris para la imagen */
.fondo-img {
    background-color: #d3d3d3; /* Color gris */
    border-radius: 15px; /* Bordes redondeados */
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 140px;
    height: 140px;
    margin: 0 auto;
}

/* Imagen de perfil completamente redonda */
.fondo-img img {
    width: 120px;
    height: 120px;
    border-radius: 50%; /* Hace la imagen redonda */
    border: 5px solid #ccc;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    object-fit: cover; /* Asegura que la imagen cubra el espacio sin deformarse */
}


/* Información dentro de la tarjeta */
.tarjeta-miembro h5 {
    margin-top: 15px;
    font-weight: bold;
    font-size: 18px;
    
}

.tarjeta-info {
    margin-top: 10px;
    text-align: left;
    font-size: 14px;
    line-height: 1.5;
}

.tarjeta-info p {
    margin: 0;
}

.tarjeta-info strong {
    font-weight: bold;
}

/* Botón de ORCID */
.orcid-btn {
    display: block;
    margin-top: 15px;
    padding: 8px;
    background: #d8d8d8;
    border-radius: 5px;
    color: black;
    text-decoration: none;
    font-weight: bold;
    font-size: 14px;
    text-align: center;
}

.orcid-btn:hover {
    background: #bbb;
}

/* Fondo con desenfoque */
.fondo-miembros {
    background: url('https://www.utn.edu.ec/wp-content/uploads/2022/06/campus-utn.jpg') no-repeat center center fixed;
    background-size: cover;
    position: relative;
    padding: 50px 0;
    
}

.fondo-miembros::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3);
    z-index: -1;
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
