<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directiva - Red Investigadores</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
</head>

<body>
    @extends('layouts.app')
    @section('content')
        <div class="hero">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <h1 class="display-4 fw-bold">Directiva</h1>
                <p class="lead">Conozca a los miembros de nuestra directiva que lideran las iniciativas de la red.</p>
            </div>
        </div>

        <div class="directivas-container vista-directiva">
            <div class="container">
                <h1 class="titulo_H1_directiva">Directiva de la Red de Investigadores</h1>

                @php
                    $directiva = [
                        [
                            'cargo' => 'Presidente',
                            'nombre' => 'Daisy Elizabeth Imbaquingo Esparza',
                            'email' => 'deimbaquingo@utn.edu.ec',
                            'imagen' => asset('images/foto_miembros/deie_miembro.png'),
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
                            'imagen' => asset('images/foto_miembros/jegm_miembro.png'),
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
                    @foreach ($directiva as $miembro)
                        <div class="col-12 col-md-10 col-lg-8 mb-4">
                            <div class="directiva-card d-flex flex-column flex-md-row align-items-center p-3">
                                <div class="directiva-foto text-center mb-3 mb-md-0">
                                    <img src="{{ $miembro['imagen'] }}" alt="Imagen de {{ $miembro['nombre'] }}">
                                </div>
                                <div class="directiva-info ms-md-4 text-center text-md-start">
                                    <div class="cargo fw-bold">{{ $miembro['cargo'] }}</div>
                                    <div class="nombre fw-semibold">{{ $miembro['nombre'] }}</div>
                                    <div class="email text-muted">{{ $miembro['email'] }}</div>
                                    @if (str_contains($miembro['orcid'], 'xxxx'))
                                        <span class="text-muted small fst-italic">ORCID no disponible</span>
                                    @else
                                        <a href="{{ $miembro['orcid'] }}" class="btn-orcid mt-2 d-inline-flex align-items-center justify-content-center" target="_blank">
                                            <img src="https://orcid.org/sites/default/files/images/orcid_16x16.png" class="orcid-icon me-1" alt="ORCID"> Ver ORCID
                                        </a>
                                    @endif
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