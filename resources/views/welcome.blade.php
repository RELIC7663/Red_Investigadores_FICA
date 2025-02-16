<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Investigadores</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

</head>

<body>
    @extends('layouts.app')



    <div id="heroCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="hero">
                    <div class="hero-overlay"></div>
                    <div class="hero-content">
                        <div class=" justify-content-center my-4">
                            <h1 class="display-4 fw-bold">BIENVENIDOS A RIPIS</h1>
                            <p class="lead">La Red Internacional de Investigación en Procesos de Ingeniería Sostenible
                                (RIPIS) fomenta la colaboración global, la innovación tecnológica y el desarrollo
                                sostenible mediante la investigación avanzada y la formación de excelencia.</p>
                        </div>

                        <div class="d-flex justify-content-center my-4">
                            <img src="https://aenit.utn.edu.ec/2024/wp-content/uploads/2024/05/1.4-e1715742644411.jpg"
                                alt="Logo RIPIS" class="me-2" style="max-height: 200px;" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item ">
                <div class="hero">
                    <div class="hero-overlay"></div>
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold">VISIÓN</h1>
                        <p class="lead">Ser una red de investigación internacional reconocida por su liderazgo en la
                            creación de soluciones sostenibles e innovadoras en ingeniería, promoviendo la colaboración
                            interdisciplinaria y global entre investigadores, instituciones académicas y el sector
                            productivo. Buscamos generar un impacto positivo en la sostenibilidad ambiental, el
                            desarrollo social y económico, y la calidad de vida de las comunidades, alineándonos con los
                            Objetivos de Desarrollo Sostenible (ODS) y las prioridades científicas y tecnológicas
                            internacionales.
                        </p>
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
                        <p class="lead">Fomentar la investigación científica de alto impacto en ingeniería sostenible
                            a través de la colaboración entre instituciones de educación superior,
                            centros de investigación y actores del sector productivo. RIPIS tiene como misión generar
                            conocimiento y desarrollar tecnologías innovadoras que contribuyan a la industrialización
                            sostenible, la producción responsable y la gestión eficiente de recursos,
                            mejorando la calidad de vida y promoviendo la educación y el desarrollo sostenible en las
                            comunidades locales y globales.</p>


                        <div class="d-flex justify-content-center my-4">

                            <img src="https://aenit.utn.edu.ec/2024/wp-content/uploads/2024/05/1.3-e1715742677392.jpg"
                                alt="Logo RIPIS" class="me-2" style="max-height: 250px;" />
                        </div>
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


    <div>

    </div>

    <div class="container mt-5">
        <div class="bg-white p-4 rounded shadow-sm">
            <h2 class="fw-bold mt-4 text-center">Red Internacional de Investigación en Procesos de Ingeniería Sostenible. [RIPIS]
            </h2>


            <div class="container mt-5">
                <div class="row align-items-center">
                    <!-- Columna de la imagen -->
                    <div class="col-md-6 text-center">
                        <img src="https://aenit.utn.edu.ec/2024/wp-content/uploads/2024/05/1.1.jpg" alt="Investigación Sostenible" class="img-fluid rounded">
                    </div>

                    <!-- Columna de los títulos y lista -->
                    <div class="col-md-6">

                        <h3 class="ms-3">Líneas de Investigación:</h3>
                        <ul class="m-4">
                            <li class="mt-3" style="text-align: justify;">La Red Internacional de Investigación en Procesos de Ingeniería Sostenible (RIPIS) es una iniciativa que busca fomentar la investigación colaborativa en ingeniería sostenible, integrando a investigadores, académicos y profesionales de diversas disciplinas. Su propósito es desarrollar soluciones innovadoras en sectores clave como la producción industrial, agropecuaria, biotecnología, energía y seguridad alimentaria.

                                Facilitar la colaboración entre instituciones para abordar desafíos en sostenibilidad.
                                Impulsar la innovación en procesos industriales y tecnológicos sostenibles.
                                Contribuir a la creación de ciudades más seguras y sostenibles.
                                Transferir conocimientos y tecnologías al sector productivo y a políticas públicas.
                                Potenciar la formación de investigadores y fortalecer grupos de investigación.
                                Promover prácticas que contribuyan al desarrollo socioeconómico y la conservación ambiental.</li>

                        </ul>
                    </div>
                </div>
            </div>


            <div class="container mt-5">
                <div class="row align-items-center">
                    <!-- Columna de la imagen -->


                    <!-- Columna de los títulos y lista -->
                    <div class="col-md-6">

                        <h3 class="ms-3">Miembros de la Red</h3>
                        <ul class="m-4">
                            <li class="mt-3" style="text-align: justify;">La RIPIS está compuesta por investigadores, instituciones educativas, ONGs, asociaciones y entidades públicas y privadas. Se identifican tres categorías de miembros: Fundadores, Activos, Honorarios
                                Los miembros deben cumplir con las normativas, participar activamente en las reuniones y presentar proyectos de investigación.</li>

                        </ul>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="REDU.png" alt="Investigación Sostenible" class="img-fluid rounded">
                    </div>
                </div>
            </div>


            <div class="container mt-5">
                <div class="row align-items-center">
                    <!-- Columna de la imagen -->
                    <div class="col-md-6 text-center">
                        <img src="images/logo_R.png" alt="Investigación Sostenible" class="img-fluid rounded">
                    </div>

                    <!-- Columna de los títulos y lista -->
                    <div class="col-md-6">

                        <h3 class="ms-3">Líneas de Investigación:</h3>
                        <ul class="m-4">
                            <li class="mt-3">Producción Industrial y Tecnológica Sostenible.</li>
                            <li class="mt-3">Desarrollo Agropecuario y Forestal Sostenible.</li>
                            <li class="mt-3">Biotecnología, Energía y Recursos Naturales Renovables.</li>
                            <li class="mt-3">Soberanía, Seguridad e Inocuidad Alimentaria Sustentable.</li>
                            <li class="mt-3">Gestión, Producción, Productividad, Innovación y Desarrollo Socioeconómico.</li>
                            <li class="mt-3">Desarrollo, Aplicación de Software y Ciberseguridad.</li>
                            <li class="mt-3">Educación y Capacitación en Ingeniería Circular y Sostenible.</li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- Sección de Redes Sociales -->
            <div class="container my-5">
                <div class="row text-center">



                    <h2 class="fw-bold mt-4 text-center">
                    </h2>

                    <div class="col-md-4 social-icons">
                        <h2 class="fw-bold mt-4 text-center">Facebook
                        </h2>
                        <a href="https://www.facebook.com/" target="_blank" class="text-primary">
                            <i class="bi bi-facebook"></i></a>
                    </div>
                    <div class="col-md-4 social-icons">
                        <h2 class="fw-bold mt-4 text-center">instagram
                        </h2>
                        <a href="https://www.instagram.com/" target="_blank" class="text-danger">
                            <i class="bi bi-instagram"></i></a>
                    </div>
                    <div class="col-md-4 social-icons">
                        <h2 class="fw-bold mt-4 text-center">Linkedin
                        </h2>
                        <a href="https://www.linkedin.com" target="_blank" class="text-info">
                            <i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>








    <!-- Bootstrap JS -->

    <!-- Script para hover en el dropdown -->


</body>

</html>