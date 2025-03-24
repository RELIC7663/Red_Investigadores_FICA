<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directiva - Red Investigadores</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

</head>

<body>

    <!-- Navbar -->
    @extends('layouts.app')
    @section('content')


    <div class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="display-4 fw-bold">Directiva</h1>
            <p class="lead">Conozca a los miembros de nuestra directiva que lideran las iniciativas de la red.</p>
        </div>
    </div>

    <div class="directivas-container">
        <div class="container">
            <h1 class="titulo_H1">Directiva de la Red de Investigadores</h1>
    
            @php
                $directiva = [
                    [
                        'cargo' => 'Presidente',
                        'nombre' => 'Daisy Elizabeth Imbaquingo Esparza',
                        'email' => 'deimbaquingo@utn.edu.ec',
                        'imagen' => 'https://software.utn.edu.ec/wp-content/uploads/2024/05/daisy.jpg',
                        'orcid' => 'https://orcid.org/0000-0002-6412-6257',
                    ],
                    [
                        'cargo' => 'Vicepresidente',
                        'nombre' => 'Diego Ernesto Echeverría Jurado',
                        'email' => 'decheverria@cenace.gob.ec',
                        'imagen' => asset('images/foto_miembros/deej_miembro.png'),
                        'orcid' => 'https://orcid.org/0000-0002-1743-9234',
                    ],
                    [
                        'cargo' => 'Secretario',
                        'nombre' => 'Julio Esteban Guerra Massón',
                        'email' => 'jeguerra@utn.edu.ec',
                        'imagen' => 'https://investigacion.utn.edu.ec/wp-content/uploads/2024/07/jeguerra.png',
                        'orcid' => 'https://orcid.org/0000-0001-5278-719X',
                    ],
                    [
                        'cargo' => 'Primer Vocal',
                        'nombre' => 'Hernán Adolfo Samaniego Armijos',
                        'email' => 'xxxx@icesi.edu.co',
                        'imagen' => asset('images/foto_miembros/hasa_miembro.png'),
                        'orcid' => 'https://orcid.org/0000-0001-6161-7002',
                    ],
                    [
                        'cargo' => 'Segundo Vocal',
                        'nombre' => 'Julio Joffre Barzola Monteses',
                        'email' => 'julio.barzolam@ug.edu.ec',
                        'imagen' => asset('images/foto_miembros/jjbm_miembro.png'),
                        'orcid' => 'https://orcid.org/0000-0003-2732-979X',
                    ],
                ];
            @endphp
    
            <div class="row justify-content-center">
                @foreach($directiva as $miembro)
                    <div class="col-md-8">
                        <h2 class="titulo">{{ $miembro['cargo'] }}</h2>
                        <div class="tarjeta-miembro-estetica">
                            <div class="foto-miembro">
                                <img src="{{ $miembro['imagen'] }}" alt="Imagen de {{ $miembro['nombre'] }}">
                            </div>
                            <div class="info-miembro">
                                <h5>{{ $miembro['nombre'] }}</h5>
                                <p><strong>Email:</strong> {{ $miembro['email'] }}</p>
                                <a href="{{ $miembro['orcid'] }}" class="orcid-btn" target="_blank">
                                    <img src="https://orcid.org/sites/default/files/images/orcid_16x16.png" class="orcid-icon" alt="ORCID"> ORCID
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @endsection

</body>

</html>