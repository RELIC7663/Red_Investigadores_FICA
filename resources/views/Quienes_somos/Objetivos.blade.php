<!DOCTYPE html>
<html lang="es" id="ripis-objectives-page">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetivos - RIPIS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/objetivos.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <!-- Agregar Font Awesome o Heroicons si quieres usar iconos predefinidos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    @extends('layouts.app')
    @section('content')
        <section class="objetivo-section ripis-objectives-section">
            <div class="container">
                <div class="section-header ripis-objectives-header">
                    <h1>Objetivos de la Red RIPIS</h1>
                    <p class="text-center mt-3">Nuestra visión estratégica para impulsar la investigación sostenible</p>
                </div>

                @php
                    $objetivos = [
                        [
                            'titulo' => 'Colaboración Interdisciplinaria',
                            'descripcion' =>
                                'Promover la colaboración entre investigadores, académicos y profesionales de diversas disciplinas para abordar los desafíos complejos relacionados con los procesos de ingeniería sostenible.',
                            'icono' => 'fas fa-handshake',
                        ],
                        [
                            'titulo' => 'Soluciones Innovadoras y Sostenibles',
                            'descripcion' =>
                                'Desarrollar soluciones innovadoras y sostenibles en los campos de la producción industrial, agropecuaria, forestal, biotecnología, energía y seguridad alimentaria, contribuyendo al avance del conocimiento y la tecnología.',
                            'icono' => 'fas fa-lightbulb',
                        ],
                        [
                            'titulo' => 'Sostenibilidad Urbana',
                            'descripcion' =>
                                'Contribuir a la creación de ciudades más inclusivas, seguras y sostenibles a través de la investigación en tecnologías y procesos que promuevan la mejora de la sostenibilidad urbana.',
                            'icono' => 'fas fa-city',
                        ],
                        [
                            'titulo' => 'Difusión y Transferencia del Conocimiento',
                            'descripcion' =>
                                'Crear plataformas y mecanismos para la difusión y transferencia de conocimientos y tecnologías desarrolladas dentro de la red, asegurando su aplicación efectiva en el sector productivo y en políticas públicas.',
                            'icono' => 'fas fa-share-alt',
                        ],
                        [
                            'titulo' => 'Fortalecimiento Institucional',
                            'descripcion' =>
                                'Aumentar la capacidad de investigación y desarrollo de las instituciones participantes, promoviendo la formación de investigadores y el fortalecimiento de grupos de investigación en los campos de interés de la red.',
                            'icono' => 'fas fa-building-columns',
                        ],
                        [
                            'titulo' => 'Impacto en el Desarrollo Socioeconómico',
                            'descripcion' =>
                                'Impactar positivamente en el desarrollo socioeconómico de las comunidades, contribuyendo a la reducción de la pobreza, la creación de empleo digno y el mejoramiento de la calidad de vida.',
                            'icono' => 'fas fa-chart-line',
                        ],
                        [
                            'titulo' => 'Sostenibilidad Ambiental',
                            'descripcion' =>
                                'Fomentar prácticas y tecnologías que aseguren la sostenibilidad ambiental, la conservación de recursos naturales y la mitigación del cambio climático, alineándose con los Objetivos de Desarrollo Sostenible.',
                            'icono' => 'fas fa-leaf',
                        ],
                    ];
                @endphp


                <div class="objetivos-container">
                    @foreach ($objetivos as $objetivo)
                        <div class="objetivo-item p-4">
                            <div class="d-flex align-items-start">
                                <div class="objetivo-icon me-4">
                                    <i class="{{ $objetivo['icono'] }} fa-lg"></i>
                                </div>
                                <div class="objetivo-content">
                                    <h4>{{ $objetivo['titulo'] }}</h4>
                                    <p>{{ $objetivo['descripcion'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
    @endsection
</body>

</html>
