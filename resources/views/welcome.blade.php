<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Investigadores</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<style>
    :root {
        --primary-color: #005A8B;
        /* Azul institucional */
        --secondary-color: #4CAF50;
        /* Verde sostenibilidad */
        --accent-color: #FFC107;
        /* Amarillo acento */
        --dark-gray: #37474F;
        /* Gris oscuro profesional */
        --light-gray: #F5F5F5;
    }

    body {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
            url("https://www.oracle.com/node/oce/storyhub/prod/api/v1.1/assets/CONT02AB929E13A1428C93AB343FCE3F5D47/native/utn-hero-banner.png") center/cover fixed;
    }

    .display-4 {
        color: var(--primary-color);
    }

    .display-4::before {
        background: var(--secondary-color);
    }

    .contact-section {
        border: 2px solid var(--primary-color);
        background: linear-gradient(145deg, rgba(255, 255, 255, 0.98) 0%, rgba(245, 245, 245, 0.98) 100%);
    }

    .contact-header {
        color: var(--primary-color);
    }

    .contact-header::after {
        background: var(--secondary-color);
    }

    .form-control:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 15px rgba(0, 90, 139, 0.2);
    }

    .btn-submit {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    }

    .btn-submit:hover {
        box-shadow: 0 8px 20px rgba(0, 90, 139, 0.3);
    }

    .contact-info li i {
        color: var(--primary-color);
    }

    /* Estilo actualizado para el mapa */
    .map-container {
        width: 100%;
        height: 500px; /* Altura aumentada */
        border-radius: 15px;
        overflow: hidden;
        margin: 40px 0;
        border: 3px solid var(--primary-color);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease;
    }

    .map-container iframe {
        width: 100%;
        height: 100%;
        border: none;
    }

    @media (max-width: 768px) {
        .map-container {
            height: 350px; /* Altura para móviles */
            margin: 25px 0;
        }
    }

    .alert-success {
        background: #dff0d8;
        border-color: #4CAF50;
        color: #3c763d;
    }

    .alert-danger {
        background: #f8d7da;
        border-color: #e53935;
        color: #721c24;
    }
</style>

<body>
    @extends('layouts.app')
    @section('content')

    <div class="container mt-5">
        <div class="bg-white p-5 rounded-3">
            <div class="text-center mb-5">
                <h1 class="display-4 fw-bold">BIENVENIDOS A RIPIS</h1>
                <h2 class="fw-bold mt-4">Red Internacional de Investigación en Procesos de Ingeniería Sostenible</h2>
            </div>

            <div class="vision-mision mb-5">
                <div class="mb-5">
                    <h1 class="display-4 fw-bold mb-4">VISIÓN</h1>
                    <p class="lead">Ser una red de investigación internacional reconocida por su liderazgo en la
                        creación de soluciones sostenibles e innovadoras en ingeniería, promoviendo la colaboración
                        interdisciplinaria y global entre investigadores...</p>
                </div>

                <div class="mb-5">
                    <h1 class="display-4 fw-bold mb-4">MISIÓN</h1>
                    <p class="lead">Fomentar la investigación científica de alto impacto en ingeniería sostenible
                        a través de la colaboración entre instituciones de educación superior,
                        centros de investigación y actores del sector productivo...</p>
                </div>
            </div>

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
                        <form id="contactForm" method="POST" action="{{ route('contact.submit') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre Completo</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Mensaje</label>
                                <textarea class="form-control auto-expand" id="message" name="message" rows="2" required></textarea>
                            </div>

                            <!-- Botón centrado -->
                            <div class="btn-submit-container">
                                <button type="submit" class="btn-submit">Enviar Mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7403529140533!2d-78.11408312431777!3d0.35819406395913467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2a3cad309ad309%3A0xc97eab5c0f6a095e!2sUniversidad%20Tecnica%20del%20Norte%20%22UTN%22!5e0!3m2!1ses!2sec!4v1739491211594!5m2!1ses!2sec"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </div>

    <script>
        // Auto-expand textarea
        function autoExpand(element) {
            element.style.height = 'auto';
            element.style.height = (element.scrollHeight) + 'px';
        }

        // Inicializar textarea al cargar
        document.addEventListener('DOMContentLoaded', function() {
            const textarea = document.getElementById('message');
            autoExpand(textarea);
        });

        // Manejar envío del formulario
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const form = e.target;
            const formData = new FormData(form);
            const submitButton = form.querySelector('button[type="submit"]');

            // Deshabilitar botón y mostrar carga
            submitButton.disabled = true;
            submitButton.innerHTML = 'Enviando... <span class="spinner-border spinner-border-sm" role="status"></span>';

            fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => {
                    if (!response.ok) throw new Error('Error en la respuesta');
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        // Mostrar mensaje de éxito
                        const alertDiv = document.createElement('div');
                        alertDiv.className = 'alert alert-success mt-3';
                        alertDiv.textContent = data.message;
                        form.parentNode.insertBefore(alertDiv, form.nextSibling);

                        form.reset();

                        // Ocultar mensaje después de 5 segundos
                        setTimeout(() => alertDiv.remove(), 5000);
                    } else {
                        throw new Error(data.message || 'Error desconocido');
                    }
                })
                .catch(error => {
                    const alertDiv = document.createElement('div');
                    alertDiv.className = 'alert alert-danger mt-3';
                    alertDiv.textContent = error.message;
                    form.parentNode.insertBefore(alertDiv, form.nextSibling);

                    // Ocultar mensaje después de 5 segundos
                    setTimeout(() => alertDiv.remove(), 5000);
                })
                .finally(() => {
                    // Restaurar botón
                    submitButton.disabled = false;
                    submitButton.innerHTML = 'Enviar Mensaje';
                });
        });
    </script>

</body>
@endsection

</html>