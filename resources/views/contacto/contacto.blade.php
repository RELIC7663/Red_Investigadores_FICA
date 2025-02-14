<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Red Investigadores</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
        /* Estilos personalizados */
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
            background: rgba(0, 0, 0, 0.4);
            z-index: -1;
        }

        .contact-section {
            background: rgba(255, 255, 255, 0.95);
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            margin-top: 50px;
        }

        .contact-header {
            color: #d40000;
            font-weight: bold;
            text-transform: uppercase;
        }

        .contact-info li {
            list-style: none;
            margin-bottom: 15px;
            font-size: 1.1rem;
        }

        .contact-info li i {
            color: #d40000;
            margin-right: 10px;
            font-size: 1.3rem;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #ccc;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: #d40000;
            box-shadow: 0 0 10px rgba(212, 0, 0, 0.3);
        }

        .btn-submit {
            background-color: #d40000;
            color: white;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn-submit:hover {
            background-color: #a10000;
            transform: scale(1.05);
        }

        .contact-img {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @extends('layouts.app')
    

    <!-- Sección de Contacto -->
    <div class="container contact-section">
        <h2 class="text-center contact-header">Información de Contacto</h2>
        <p class="text-center text-muted">Para información o consultas, contáctenos a:</p>
        <div class="row mt-4 align-items-center">
            <div class="col-md-6">
                <ul class="contact-info">
                    <li><i class="bi bi-envelope"></i> <strong>Email:</strong> contacto@redinvestigadores.org</li>
                    <li><i class="bi bi-telephone"></i> <strong>Teléfono:</strong> +593 123 456 789</li>
                    <li><i class="bi bi-geo-alt"></i> <strong>Dirección:</strong> Av. Principal, Quito, Ecuador</li>
                </ul>
            </div>
            <div class="col-md-6 text-center">
                <img src="https://via.placeholder.com/400x250" alt="Imagen de contacto" class="img-fluid contact-img">
            </div>
        </div>

        <!-- Formulario de Contacto -->
        <div class="mt-5">
            <h4 class="text-center contact-header">Envíanos un Mensaje</h4>
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
                    <textarea class="form-control" id="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-submit w-100">Enviar Mensaje</button>
            </form>
        </div>
    </div>

    <!-- Mapa con la ubicación de la Universidad Técnica del Norte -->
    <div class="container mt-5">
        <iframe class="w-100" height="400"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7403529140533!2d-78.11408312431777!3d0.35819406395913467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2a3cad309ad309%3A0xc97eab5c0f6a095e!2sUniversidad%20Tecnica%20del%20Norte%20%22UTN%22!5e0!3m2!1ses!2sec!4v1739491211594!5m2!1ses!2sec"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

    {{-- <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2025 Red Investigadores | Todos los derechos reservados</p>
    </footer> --}}

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Mensaje enviado con éxito. Nos pondremos en contacto pronto.');
            this.reset();
        });
    </script>
</body>

</html>
