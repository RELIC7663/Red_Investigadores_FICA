<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
@extends('layouts.app')        


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
                    <h1 class="display-4 fw-bold">Congreso Internacional AENIT 2024</h1>
                    <p class="lead">El evento se llevará a cabo los días 19, 20 y 21 de junio de 2024 en la Universidad Técnica del Norte, Ibarra-Ecuador. Un espacio de diálogo e intercambio tecnológico con la participación de investigadores y profesionales.</p>
                    
                </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="hero">
                    <div class="hero-overlay"></div>
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold">Congreso Internacional AENIT 2024</h1>
                        <p class="lead">El evento se llevará a cabo los días 19, 20 y 21 de junio de 2024 en la Universidad Técnica del Norte, Ibarra-Ecuador. Un espacio de diálogo e intercambio tecnológico con la participación de investigadores y profesionales.</p>
                        
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