<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Red Investigadores</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
        /* Fondo con imagen y capa de opacidad */
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
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        /* Sección de contacto con fondo más opaco */
        .contact-section {
            background: rgba(255, 255, 255, 0.85);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            margin-top: 50px;
            max-width: 800px;
        }

        .contact-header {
            color: #d40000;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.6rem;
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid #ddd;
            padding: 12px;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: #d40000;
            box-shadow: 0 0 12px rgba(212, 0, 0, 0.4);
        }

        /* Textarea que crece automáticamente */
        .auto-expand {
            min-height: 50px;
            max-height: 300px;
            overflow-y: hidden;
            resize: none;
        }

        /* Botón de envío más pequeño y completamente centrado */
        .btn-submit-container {
            display: flex;
            justify-content: center;
            margin-top: 15px;
        }

        .btn-submit {
            background: linear-gradient(135deg, #d40000, #b00000);
            color: white;
            font-weight: bold;
            transition: all 0.3s ease-in-out;
            padding: 10px;
            border-radius: 8px;
            font-size: 0.9rem;
            width: 200px; /* Ajuste del tamaño */
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            border: none;
            outline: none;
            cursor: pointer;
            text-align: center;
        }

        .btn-submit:hover {
            background: linear-gradient(135deg, #b00000, #900000);
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.25);
        }

        .btn-submit:active {
            transform: scale(0.98);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }

        /* Mapa más pequeño */
        .map-container {
            width: 45%;
            height: 230px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin: 40px auto;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }

        /* Información de contacto */
        .contact-info {
            font-size: 1rem;
            margin-top: 15px;
        }

        .contact-info li {
            list-style: none;
            margin-bottom: 12px;
        }

        .contact-info li i {
            color: #d40000;
            margin-right: 8px;
            font-size: 1.2rem;
        }

    </style>
</head>

<body>

    @extends('layouts.app')

    <div class="container d-flex flex-column align-items-center">
        <div class="contact-section w-100">
            <h2 class="contact-header">Información de Contacto</h2>
            <p class="text-center text-muted">Para información o consultas, contáctanos a:</p>

            <!-- Información de Contacto -->
            <div class="row mt-4 align-items-center">
                <div class="col-md-6">
                    <ul class="contact-info">
                        <li><i class="bi bi-envelope"></i> <strong>Email:</strong> contacto@redinvestigadores.org</li>
                        <li><i class="bi bi-telephone"></i> <strong>Teléfono:</strong> +593 123 456 789</li>
                        <li class="address"><i class="bi bi-geo-alt"></i> <strong>Dirección:</strong> 
                            <span>Av. 17 de julio, 5-21 y Gral. José María Cordova, Ibarra, Ecuador</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 text-center">
                    <img src="images/logo_R.png" alt="Imagen de contacto" class="img-fluid contact-img">
                </div>
            </div>

            <!-- Formulario de Contacto -->
            <div class="mt-5">
                <h4 class="contact-header">Envíanos un Mensaje</h4>
                <form id="contactForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea class="form-control auto-expand" id="message" rows="2" required oninput="autoExpand(this)"></textarea>
                    </div>

                    <!-- Botón centrado -->
                    <div class="btn-submit-container">
                        <button type="submit" class="btn-submit">Enviar Mensaje</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Mapa con tamaño más pequeño -->
    <div class="container map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7403529140533!2d-78.11408312431777!3d0.35819406395913467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2a3cad309ad309%3A0xc97eab5c0f6a095e!2sUniversidad%20Tecnica%20del%20Norte%20%22UTN%22!5e0!3m2!1ses!2sec!4v1739491211594!5m2!1ses!2sec"
            allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- Bootstrap JS -->
    <script>
        function autoExpand(element) {
            element.style.height = 'auto';
            element.style.height = (element.scrollHeight) + 'px';
        }
    </script>

</body>
</html>