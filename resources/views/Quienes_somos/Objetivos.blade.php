<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetivos - RIPIS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

@extends('layouts.app')        

<!-- Hero Carousel -->
<div id="heroCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="4"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="5"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="hero">
                <div class="hero-overlay"></div>
                <div class="hero-content text-center">
                    <h1 class="display-4 fw-bold">Fomentar el Conocimiento</h1>
                    <p class="lead">Impulsar la investigación en ingeniería sostenible, promoviendo políticas públicas y colaboraciones estratégicas.</p>
                </div>
                <div class="d-flex justify-content-center my-4 bg-white p-2 rounded">
                    <img src="https://www.utn.edu.ec/wp-content/uploads/2022/06/campus-utn.jpg" alt="Fomentar el Conocimiento" style="max-height: 250px; border-radius: 10px;">
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="hero">
                <div class="hero-overlay"></div>
                <div class="hero-content text-center">
                    <h1 class="display-4 fw-bold">Colaboración Internacional</h1>
                    <p class="lead">Crear alianzas con instituciones académicas, ONGs y sectores productivos a nivel global.</p>
                </div>
                <div class="d-flex justify-content-center my-4 bg-white p-2 rounded">
                    <img src="https://www.oracle.com/node/oce/storyhub/prod/api/v1.1/assets/CONT02AB929E13A1428C93AB343FCE3F5D47/native/utn-hero-banner.png" alt="Colaboración Internacional" style="max-height: 250px; border-radius: 10px;">
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="hero">
                <div class="hero-overlay"></div>
                <div class="hero-content text-center">
                    <h1 class="display-4 fw-bold">Participación Activa</h1>
                    <p class="lead">Garantizar la integración de los miembros en reuniones, debates y proyectos clave.</p>
                </div>
                <div class="d-flex justify-content-center my-4 bg-white p-2 rounded">
                    <img src="https://www.utn.edu.ec/wp-content/uploads/2022/06/campus-utn.jpg" alt="Participación Activa" style="max-height: 250px; border-radius: 10px;">
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="hero">
                <div class="hero-overlay"></div>
                <div class="hero-content text-center">
                    <h1 class="display-4 fw-bold">Generación de Proyectos</h1>
                    <p class="lead">Apoyar el desarrollo de investigaciones alineadas con los objetivos de sostenibilidad y desarrollo social.</p>
                </div>
                <div class="d-flex justify-content-center my-4 bg-white p-2 rounded">
                    <img src="https://www.utn.edu.ec/wp-content/uploads/2022/06/campus-utn.jpg" alt="Generación de Proyectos" style="max-height: 250px; border-radius: 10px;">
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="hero">
                <div class="hero-overlay"></div>
                <div class="hero-content text-center">
                    <h1 class="display-4 fw-bold">Desarrollo de Políticas</h1>
                    <p class="lead">Proponer políticas públicas para fortalecer la investigación en procesos sostenibles.</p>
                </div>
                <div class="d-flex justify-content-center my-4 bg-white p-2 rounded">
                    <img src="https://www.utn.edu.ec/wp-content/uploads/2022/06/campus-utn.jpg" alt="Desarrollo de Políticas" style="max-height: 250px; border-radius: 10px;">
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="hero">
                <div class="hero-overlay"></div>
                <div class="hero-content text-center">
                    <h1 class="display-4 fw-bold">Inclusión y Ética</h1>
                    <p class="lead">Asegurar transparencia y ética en las investigaciones promovidas por la RIPIS.</p>
                </div>
                <div class="d-flex justify-content-center my-4 bg-white p-2 rounded">
                    <img src="https://www.utn.edu.ec/wp-content/uploads/2022/06/campus-utn.jpg" alt="Inclusión y Ética" style="max-height: 250px; border-radius: 10px;">
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
