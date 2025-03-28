<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miembros - Red Investigadores</title>

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</head>

<body>

    <!-- Navbar -->
    @extends('layouts.app')
    @section('content')
        <!-- Hero Section -->
        <div class="hero">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <h1 class="display-4 fw-bold">Miembros</h1>
                <p class="lead">Nuestra red está compuesta por diversos miembros comprometidos con la investigación
                    sostenible.</p>
            </div>
        </div>

        <!-- Sección de Miembros -->
        <section class="directivas-container py-5">
            <h2 class="titulo_H1 text-center mb-5">Miembros de la Red</h2>

            <div class="container">
                <div class="row g-4">
                    @php
                        $miembros = [
                            [
                                'nombre' => 'Daisy Elizabeth Imbaquingo Esparza',
                                'email' => 'deimbaquingo@utn.edu.ec',
                                'imagen' => asset('images/foto_miembros/deie_miembro.png'),
                                'orcid' => 'https://orcid.org/0000-0002-6412-6257',
                            ],
                            [
                                'nombre' => ' Diego Ernesto Echeverría Jurado',
                                'email' => 'decheverria@cenace.gob.ec',
                                'imagen' => asset('images/foto_miembros/deej_miembro.png'),
                                'orcid' => 'https://orcid.org/0000-0002-1743-9234',
                            ],
                            [
                                'nombre' => 'Julio Esteban Guerra Massón',
                                'email' => 'jeguerra@utn.edu.ec',
                                'imagen' => asset('images/foto_miembros/jegm_miembro.png'),
                                'orcid' => 'https://orcid.org/0000-0001-5278-719X',
                            ],
                            [
                                'nombre' => ' Andrés Navarro Cadavid',
                                'email' => 'anavarr@icesi.edu.co',
                                'imagen' => asset('images/foto_miembros/anc_miembro.png'),
                                'orcid' => 'https://orcid.org/0000-0002-4154-2119',
                            ],
                            [
                                'nombre' => 'Verónica Isolina Massón Fiallos',
                                'email' => 'vmasson@utn.edu.ec',
                                'imagen' => asset('images/foto_miembros/vimf_miembro.png'),
                                'orcid' => 'https://orcid.org/xxxx-xxxx-xxxx-xxxx',
                            ],
                            [
                                'nombre' => ' Andres Santiago Martínez León',
                                'email' => 'xxxx@utn.edu.ec',
                                'imagen' => asset('images/foto_miembros/asml_miembro.png'),
                                'orcid' => 'https://orcid.org/xxxx-xxxx-xxxx-xxxx',
                            ],
                            [
                                'nombre' => ' Marcia Catalina Ramirez Galarraga',
                                'email' => 'mcramirez@utn.edu.ec',
                                'imagen' => asset('images/foto_miembros/mcrg_miembro.png'),

                                'orcid' => 'https://orcid.org/xxxx-xxxx-xxxx-xxxx',
                            ],
                            [
                                'nombre' => ' Albert Giovanny Espinal Santana',
                                'email' => 'aespinal@espol.edu.ec',
                                'imagen' => asset('images/foto_miembros/ages_miembro.png'),

                                'orcid' => 'https://orcid.org/0000-0003-2619-2752',
                            ],
                            [
                                'nombre' => 'Edwin Giannine Valarezo Añazco',
                                'email' => 'edgivala@espol.edu.ec',
                                'imagen' => asset('images/foto_miembros/egva_miembro.png'),

                                'orcid' => 'https://orcid.org/0000-0003-0077-8528',
                            ],
                            [
                                'nombre' => 'Hernán Adolfo Samaniego Armijos',
                                'email' => 'xxxx@utn.edu.ec',
                                'imagen' => asset('images/foto_miembros/hasa_miembro.png'),

                                'orcid' => 'https://orcid.org/xxxx-xxxx-xxxx-xxxx',
                            ],
                            [
                                'nombre' => 'Diego Ramiro Villalba Calderón',
                                'email' => 'esvillalbadiego@yahoo.com',
                                'imagen' => asset('images/foto_miembros/drvc_miembro.png'),

                                'orcid' => 'https://orcid.org/0000-0002-3794-6604',
                            ],
                            [
                                'nombre' => 'Jaime Alcides Meza Hormaza',
                                'email' => 'jaime.meza@utm.edu.ec',
                                'imagen' => asset('images/foto_miembros/jamh_miembro.png'),
                                'orcid' => 'https://orcid.org/0000-0002-8279-5630',
                            ],
                            [
                                'nombre' => 'Julio Joffre Barzola Monteses',
                                'email' => 'julio.barzolam@ug.edu.ec',
                                'imagen' => asset('images/foto_miembros/jjbm_miembro.png'),
                                'orcid' => 'https://orcid.org/0000-0003-2732-979X',
                            ],
                            [
                                'nombre' => 'Willim Ricardo Esparza Encalada',
                                'email' => 'wresparza@utn.edu.ec',
                                'imagen' => asset('images/foto_miembros/wree_miembro.png'),
                                'orcid' => 'https://orcid.org/0000-0003-0492-9979',
                            ],
                            [
                                'nombre' => 'Carlos Nolasco Mafla Yepez',
                                'email' => 'cnmafla@utn.edu.ec',
                                'imagen' => asset('images/foto_miembros/cnmy_miembro.png'),
                                'orcid' => 'https://orcid.org/0000-0003-3704-8676',
                            ],
                            [
                                'nombre' => 'Robert Mauricio Valencia Chapi',
                                'email' => 'rmvalencia@utn.edu.ec',
                                'imagen' => asset('images/foto_miembros/rmvc_miembro.png'),
                                'orcid' => 'https://orcid.org/0000-0003-1977-2118',
                            ],
                            [
                                'nombre' => 'Brizeida Nohemi Gamez Aparicio',
                                'email' => 'bngamez@utn.edu.ec',
                                'imagen' => asset('images/foto_miembros/bnga_miembro.png'),
                                'orcid' => 'https://orcid.org/xxxx-xxxx-xxxx-xxxx',
                            ],
                            [
                                'nombre' => 'Cosme Damian Mejia Echeverria',
                                'email' => 'cdmejia@utn.edu.ec',
                                'imagen' => asset('images/foto_miembros/cdme_miembro.png'),
                                'orcid' => 'https://orcid.org/0000-0001-6961-2644',
                            ],
                            [
                                'nombre' => 'Carlos Alberto Vasquez Ayala',
                                'email' => 'cavasquez@utn.edu.ec',
                                'imagen' => asset('images/foto_miembros/cava_miembro.png'),
                                'orcid' => 'https://orcid.org/xxxx-xxxx-xxxx-xxxx',
                            ],
                        ];
                    @endphp

                    @foreach ($miembros as $miembro)
                        <div class="col-12 col-md-6">
                            <div class="tarjeta-miembro-horizontal d-flex flex-column flex-md-row align-items-center p-3">

                                <!-- FOTO -->
                                <div class="foto-horizontal me-md-4 mb-3 mb-md-0 text-center">
                                    <img src="{{ $miembro['imagen'] }}" alt="Foto de {{ trim($miembro['nombre']) }}">
                                </div>

                                <!-- INFO -->
                                <div class="contenido-miembro w-100 text-center text-md-start">
                                    <h5 class="fw-bold text-dark mb-1">{{ trim($miembro['nombre']) }}</h5>
                                    <p class="mb-2 text-muted">{{ $miembro['email'] }}</p>

                                    @if (!str_contains($miembro['orcid'], 'xxxx'))
                                        <a href="{{ $miembro['orcid'] }}" target="_blank" class="btn-miembro">
                                            <img src="https://orcid.org/sites/default/files/images/orcid_16x16.png"
                                                alt="ORCID" class="me-1">
                                            Ver ORCID
                                        </a>
                                    @else
                                        <span class="text-muted small fst-italic">ORCID no disponible</span>
                                    @endif
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
