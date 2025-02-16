<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miembros - Red Investigadores</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</head>

<body>

    <!-- Navbar -->
    @extends('layouts.app')

    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="display-4 fw-bold">Miembros</h1>
            <p class="lead">Nuestra red está compuesta por diversos miembros comprometidos con la investigación
                sostenible.</p>
        </div>
    </div>

    <!-- Sección de Miembros (DENTRO DEL FONDO NEGRO) -->
    <div class="fondo-miembros">
        <div class="container">
            <div class="row justify-content-center">
                @php
                    $miembros = [
                        [
                            'nombre' => 'PhD. Daisy Elizabeth Imbaquingo Esparza',
                            'email' => 'docente@utn.edu.ec',
                            'imagen' => 'https://software.utn.edu.ec/wp-content/uploads/2024/05/daisy.jpg',
                            'orcid' => 'https://orcid.org/0000-0002-6412-6257',
                        ],
                        [
                            'nombre' => 'PhD. Diego Ernesto Echeverría Jurado',
                            'email' => 'wresparza@utn.edu.ec',
                            'imagen' =>
                            'orcid' => 'https://orcid.org/0000-0003-0492-9979',
                        ],
                        [
                            'nombre' => 'PhD. Julio Esteban Guerra Massón',
                            'email' => 'jeguera@utn.edu.ec',
                            'imagen' => 'https://investigacion.utn.edu.ec/wp-content/uploads/2024/07/jeguerra.png',
                            'orcid' => 'https://orcid.org/0000-0001-5278-719X',
                        ],
                        [
                            'nombre' => 'PhD. Andrés Navarro Cadavid',
                            'email' => 'anavarr@icesi.edu.co',
                            'imagen' => 'https://investigacion.utn.edu.ec/wp-content/uploads/2024/07/andresnavarro.jpg',
                            'orcid' => 'https://orcid.org/0000-0001-6961-2644',
                        ],
                        [
                            'nombre' => 'PhD. Verónica Isolina Massón Fiallos',
                            'email' => 'vmasson@utn.edu.ec',
                            'imagen' => 'https://investigacion.utn.edu.ec/wp-content/uploads/2024/07/veronicamasson.jpg',
                            'orcid' => 'https://orcid.org/0000-0003-1977-2118',
                        ],
                        [
                            'nombre' => 'PhD. Verónica Isolina Massón Fiallos',
                            'email' => 'vmasson@utn.edu.ec',
                            'imagen' =>
                                'https://investigacion.utn.edu.ec/wp-content/uploads/2024/07/veronicamasson.jpg',
                            'orcid' => 'https://orcid.org/0000-0003-1977-2118',
                        ],
                        [
                            'nombre' => 'PhD. Verónica Isolina Massón Fiallos',
                            'email' => 'vmasson@utn.edu.ec',
                            'imagen' =>
                                'https://investigacion.utn.edu.ec/wp-content/uploads/2024/07/veronicamasson.jpg',
                            'orcid' => 'https://orcid.org/0000-0003-1977-2118',
                        ],
                        [
                            'nombre' => 'PhD. Verónica Isolina Massón Fiallos',
                            'email' => 'vmasson@utn.edu.ec',
                            'imagen' =>
                                'https://investigacion.utn.edu.ec/wp-content/uploads/2024/07/veronicamasson.jpg',
                            'orcid' => 'https://orcid.org/0000-0003-1977-2118',
                        ],
                        [
                            'nombre' => 'PhD. Verónica Isolina Massón Fiallos',
                            'email' => 'vmasson@utn.edu.ec',
                            'imagen' =>
                                'https://investigacion.utn.edu.ec/wp-content/uploads/2024/07/veronicamasson.jpg',
                            'orcid' => 'https://orcid.org/0000-0003-1977-2118',
                        ],
                        [
                            'nombre' => 'PhD. Verónica Isolina Massón Fiallos',
                            'email' => 'vmasson@utn.edu.ec',
                            'imagen' =>
                                'https://investigacion.utn.edu.ec/wp-content/uploads/2024/07/veronicamasson.jpg',
                            'orcid' => 'https://orcid.org/0000-0003-1977-2118',
                        ],
                        [
                            'nombre' => 'PhD. Verónica Isolina Massón Fiallos',
                            'email' => 'vmasson@utn.edu.ec',
                            'imagen' =>
                                'https://investigacion.utn.edu.ec/wp-content/uploads/2024/07/veronicamasson.jpg',
                            'orcid' => 'https://orcid.org/0000-0003-1977-2118',
                        ],
                        [
                            'nombre' => 'PhD. Verónica Isolina Massón Fiallos',
                            'email' => 'vmasson@utn.edu.ec',
                            'imagen' =>
                                'https://investigacion.utn.edu.ec/wp-content/uploads/2024/07/veronicamasson.jpg',
                            'orcid' => 'https://orcid.org/0000-0003-1977-2118',
                        ],
                        [
                            'nombre' => 'PhD. Verónica Isolina Massón Fiallos',
                            'email' => 'vmasson@utn.edu.ec',
                            'imagen' =>
                                'https://investigacion.utn.edu.ec/wp-content/uploads/2024/07/veronicamasson.jpg',
                            'orcid' => 'https://orcid.org/0000-0003-1977-2118',
                        ],
                        [
                            'nombre' => 'PhD. Verónica Isolina Massón Fiallos',
                            'email' => 'vmasson@utn.edu.ec',
                            'imagen' =>
                                'https://investigacion.utn.edu.ec/wp-content/uploads/2024/07/veronicamasson.jpg',
                            'orcid' => 'https://orcid.org/0000-0003-1977-2118',
                        ],
                        [
                            'nombre' => 'PhD. Verónica Isolina Massón Fiallos',
                            'email' => 'vmasson@utn.edu.ec',
                            'imagen' =>
                                'https://investigacion.utn.edu.ec/wp-content/uploads/2024/07/veronicamasson.jpg',
                            'orcid' => 'https://orcid.org/0000-0003-1977-2118',
                        ],
                        [
                            'nombre' => 'PhD. Verónica Isolina Massón Fiallos',
                            'email' => 'vmasson@utn.edu.ec',

                            'imagen' =>
                                'https://investigacion.utn.edu.ec/wp-content/uploads/2024/07/veronicamasson.jpg',
                            'orcid' => 'https://orcid.org/0000-0003-1977-2118',
                        ],
                        [
                            'nombre' => 'PhD. Verónica Isolina Massón Fiallos',
                            'email' => 'vmasson@utn.edu.ec',
                            'imagen' =>
                                'https://investigacion.utn.edu.ec/wp-content/uploads/2024/07/veronicamasson.jpg',
                            'orcid' => 'https://orcid.org/0000-0003-1977-2118',
                        ],
                        [
                            'nombre' => 'PhD. Verónica Isolina Massón Fiallos',
                            'email' => 'vmasson@utn.edu.ec',
                            'imagen' =>
                                'https://investigacion.utn.edu.ec/wp-content/uploads/2024/07/veronicamasson.jpg',
                            'orcid' => 'https://orcid.org/0000-0003-1977-2118',
                        ],
                        [
                            'nombre' => 'PhD. Verónica Isolina Massón Fiallos',
                            'email' => 'vmasson@utn.edu.ec',
                            'imagen' =>
                                'https://investigacion.utn.edu.ec/wp-content/uploads/2024/07/veronicamasson.jpg',
                            'orcid' => 'https://orcid.org/0000-0003-1977-2118',
                        ],
                    ];
                @endphp

                @foreach ($miembros as $miembro)
                    <div class="col-md-4 col-lg-3">

                        <div class="tarjeta-miembro">
                            <div class="fondo-img">
                                <img src="{{ $miembro['imagen'] }}" alt="Imagen de {{ $miembro['nombre'] }}">
                            </div>
                            <h5 class="fw-bold">{{ $miembro['nombre'] }}</h5>
                            <div class="tarjeta-info">
                                <p><strong>Email:</strong> {{ $miembro['email'] }}</p>
                            </div>
                            <a href="{{ $miembro['orcid'] }}" target="_blank" class="orcid-btn">
                                {{ $miembro['orcid'] }}
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


</body>

</html>
