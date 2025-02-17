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

            <h2 class="titulo">Presidente</h2>
            <div class="tarjeta-miembro">
                <div class="fondo-img">
                    <img src="https://software.utn.edu.ec/wp-content/uploads/2024/05/daisy.jpg" alt="Presidente">
                </div>
                <h5>Daisy Elizabeth Imbaquingo Esparza</h5>
                <p>Email: deimbaquingo@utn.edu.ec</p>
                <a href="https://orcid.org/0000-0002-6412-6257" class="orcid-btn" target="_blank">ORCID</a>
            </div>

            <h2 class="titulo">Vicepresidente</h2>
            <div class="tarjeta-miembro">
                <div class="fondo-img">
                    <img src="{{ asset('images/foto_miembros/deej_miembro.png') }}" alt="Vicepresidente">
                </div>
                <h5>Diego Ernesto Echeverría Jurado</h5>
                <p>Email: decheverria@cenace.gob.ec</p>
                <a href="https://orcid.org/0000-0002-1743-9234" class="orcid-btn" target="_blank">ORCID</a>
            </div>

            <h2 class="titulo">Secretario</h2>
            <div class="tarjeta-miembro">
                <div class="fondo-img">
                    <img src="https://investigacion.utn.edu.ec/wp-content/uploads/2024/07/jeguerra.png" alt="Secretario">
                </div>
                <h5>Julio Esteban Guerra Massón</h5>
                <p>Email: jeguerra@utn.edu.ec</p>
                <a href="https://orcid.org/0000-0001-5278-719X" class="orcid-btn" target="_blank">ORCID</a>
            </div>

            <h2 class="titulo">Primer Vocal</h2>
            <div class="tarjeta-miembro">
                <div class="fondo-img">
                    <img src="{{ asset('images/foto_miembros/hasa_miembro.png') }}" alt="Primer Vocal">
                </div>
                <h5>Hernán Adolfo Samaniego Armijos</h5>
                <p>Email: xxxx@icesi.edu.co</p>
                <a href="https://orcid.org/0000-0001-6161-7002" class="orcid-btn" target="_blank">ORCID</a>
            </div>

            <h2 class="titulo">Segundo Vocal</h2>
            <div class="tarjeta-miembro">
                <div class="fondo-img">
                    <img src="{{ asset('images/foto_miembros/jjbm_miembro.png') }}" alt="Segundo Vocal">
                </div>
                <h5>Julio Joffre Barzola Monteses</h5>
                <p>Email: julio.barzolam@ug.edu.ec</p>
                <a href="https://orcid.org/0000-0003-2732-979X" class="orcid-btn" target="_blank">ORCID</a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const cards = document.querySelectorAll(".tarjeta-miembro");
            cards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = 1;
                    card.style.transform = "translateY(0)";
                }, index * 200);
            });
        });
    </script>

</body>

</html>