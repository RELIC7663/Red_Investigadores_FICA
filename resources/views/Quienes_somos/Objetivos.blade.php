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
                        'titulo' => 'Fomentar el Conocimiento',
                        'descripcion' => 'Impulsamos la investigación en ingeniería sostenible mediante políticas públicas innovadoras y colaboraciones estratégicas que transforman el panorama tecnológico.',
                        'icono' => 'fas fa-graduation-cap'  // Usando clase de Font Awesome
                    ],
                    [
                        'titulo' => 'Colaboración Internacional',
                        'descripcion' => 'Construimos alianzas sólidas con instituciones académicas, ONGs y sectores productivos globales para amplificar el impacto de nuestras investigaciones.',
                        'icono' => 'fas fa-globe'
                    ],
                    [
                        'titulo' => 'Participación Activa',
                        'descripcion' => 'Promovemos la integración dinámica de nuestros investigadores en espacios de debate, proyectos interdisciplinarios y iniciativas de vanguardia.',
                        'icono' => 'fas fa-users'
                    ],
                    [
                        'titulo' => 'Generación de Proyectos',
                        'descripcion' => 'Apoyamos el desarrollo de investigaciones innovadoras que aborden desafíos críticos de sostenibilidad y promuevan el desarrollo social.',
                        'icono' => 'fas fa-lightbulb'
                    ],
                    [
                        'titulo' => 'Desarrollo de Políticas',
                        'descripcion' => 'Diseñamos y proponemos marcos regulatorios que fortalezcan la investigación en procesos industriales sostenibles y faciliten la innovación.',
                        'icono' => 'fas fa-clipboard-list'
                    ],
                    [
                        'titulo' => 'Inclusión y Ética',
                        'descripcion' => 'Garantizamos la transparencia, diversidad y responsabilidad ética en todas nuestras investigaciones, creando un ecosistema de investigación inclusivo.',
                        'icono' => 'fas fa-balance-scale'
                    ]
                ];
            @endphp

            <div class="row g-4 ripis-objectives-grid">
                @foreach ($objetivos as $objetivo)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="objetivo-card ripis-objective-card h-100">
                            <div class="objetivo-icon ripis-objective-icon">
                                <i class="{{ $objetivo['icono'] }}"></i>
                            </div>
                            <div class="objetivo-text ripis-objective-text">
                                <h3>{{ $objetivo['titulo'] }}</h3>
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