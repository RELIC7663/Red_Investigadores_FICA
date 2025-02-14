<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Investigadores</title>
    <style>
    

    

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
</style>

</head>

<body>
@extends('layouts.app')        
    
    <div class="container my-5">
        <div class="row text-center">
        </div>
    </div>
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

    

    <!-- Bootstrap JS -->
 
    <!-- Script para hover en el dropdown -->
    

</body>

</html>