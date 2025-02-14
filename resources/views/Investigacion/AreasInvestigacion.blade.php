<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Áreas de Investigación</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
                    <h1 class="display-4 fw-bold">ÁREAS DE INVESTIGACIÓN</h1>
                    <p class="lead text-center">Explora nuestras principales líneas de investigación en diversas disciplinas.</p>
                    <div class="row mt-4">
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Inteligencia Artificial</h5>
                                    <p class="card-text">Desarrollo de modelos avanzados de aprendizaje automático para diversas aplicaciones.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Ingeniería Ambiental</h5>
                                    <p class="card-text">Investigación en tecnologías sostenibles y energías renovables.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Nanotecnología</h5>
                                    <p class="card-text">Aplicaciones en medicina, materiales y energía.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="hero">
                <div class="hero-overlay"></div>
                <div class="hero-content">
                    <h1 class="display-4 fw-bold">Areas</h1>
                    <p class="lead">Promover el intercambio de conocimientos, la colaboración internacional y el desarrollo de tecnologías sostenibles que contribuyan al bienestar de las comunidades y al cuidado del medio ambiente.</p>
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
                    
                    <p class="lead">La Red Internacional de Investigación en Procesos de Ingeniería Sostenible (RIPIS) fomenta la colaboración global, la innovación tecnológica y el desarrollo sostenible mediante la investigación avanzada y la formación de excelencia.</p>
                    <div class="d-flex justify-content-center my-4">
                        <img src="https://aenit.utn.edu.ec/2024/wp-content/uploads/2024/05/pixelcut-export-1.jpeg" alt="Logo RIPIS" class="me-2" style="max-height: 250px;" />
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


</body>
</html>
