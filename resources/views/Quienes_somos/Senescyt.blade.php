<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprobación Senescyt - Red Investigadores</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
</head>

<body>

    @extends('layouts.app')
    @section('content')
    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="display-4 fw-bold">Aprobación Senescyt</h1>
            <p class="lead">Este proyecto ha sido aprobado por la Secretaría Nacional de Educación Superior, Ciencia, Tecnología e Innovación (SENESCYT).</p>
        </div>
    </div>

    <!-- Contenido de Aprobación Senescyt -->
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="fw-bold">Certificación</h2>
                <p>La red ha obtenido la aprobación oficial para llevar a cabo proyectos en diversas áreas sostenibles de ingeniería...</p>
            </div>
        </div>
        <a href="{{ asset('AprobacionSenecyt/SENESCYT-SDIC-DIC-2025-0023-O.pdf') }}" download class="btn btn-success">
            Descargar Certificado SENESCYT
        </a>
        
    </div>
    
    @endsection
</body>

</html>