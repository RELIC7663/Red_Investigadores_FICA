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

<div class="container my-4">
    <h2 class="fw-bold text-center">Áreas de Investigación</h2>
    <p class="text-center">Explora nuestras principales líneas de investigación en diversas disciplinas.</p>

    <div class="row mt-4">
        <!-- Ejemplo de tarjeta para un área de investigación -->
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
        
        <!-- Agregar más áreas según sea necesario -->
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
