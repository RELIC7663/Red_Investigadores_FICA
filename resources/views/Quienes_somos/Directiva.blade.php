<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directiva - Red Investigadores</title>


</head>

<body>

    <!-- Navbar -->
    @extends('layouts.app')

    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="display-4 fw-bold">Directiva</h1>
            <p class="lead">Conozca a los miembros de nuestra directiva que lideran las iniciativas de la red.</p>
        </div>
    </div>
    

    
    <div class = "directivas-container">
        <div class="container">
            <h1 class="titulo_H1">Directiva de la Red de Investigadores</h1>

            <h2 class="titulo">Presidente</h2>
            <div class="tarjeta-miembro">
                <div class="fondo-img">
                    <img src="images/foto_miembros/presidente.png" alt="Presidente">
                </div>
                <h5>xxxx-xxxx-xxxx-xxxx</h5>
                <p>Email: xxxx@utn.edu.ec</p>
                <a href="https://orcid.org/xxxx-xxxx-xxxx-xxxx" class="orcid-btn" target="_blank">ORCID</a>
            </div>

            <h2 class="titulo">Vicepresidente</h2>
            <div class="tarjeta-miembro">
                <div class="fondo-img">
                    <img src="images/foto_miembros/vicepresidente.png" alt="Vicepresidente">
                </div>
                <h5>xxxx-xxxx-xxxx-xxxx</h5>
                <p>Email: xxxx@cenace.gob.ec</p>
                <a href="https://orcid.org/xxxx-xxxx-xxxx-xxxx" class="orcid-btn" target="_blank">ORCID</a>
            </div>

            <h2 class="titulo">Secretario</h2>
            <div class="tarjeta-miembro">
                <div class="fondo-img">
                    <img src="images/foto_miembros/secretario.png" alt="Secretario">
                </div>
                <h5>xxxx</h5>
                <p>Email: xxxx@utn.edu.ec</p>
                <a href="https://orcid.org/0000-0001-5278-719X" class="orcid-btn" target="_blank">ORCID</a>
            </div>

            <h2 class="titulo">Primer Vocal</h2>
            <div class="tarjeta-miembro">
                <div class="fondo-img">
                    <img src="images/foto_miembros/primer_vocal.png" alt="Primer Vocal">
                </div>
                <h5>xxx</h5>
                <p>Email: xxxx@icesi.edu.co</p>
                <a href="https://orcid.org/xxxx-xxxx-xxxx-xxxx" class="orcid-btn" target="_blank">ORCID</a>
            </div>

            <h2 class="titulo">Segundo Vocal</h2>
            <div class="tarjeta-miembro">
                <div class="fondo-img">
                    <img src="images/foto_miembros/segundo_vocal.png" alt="Segundo Vocal">
                </div>
                <h5>xxxx</h5>
                <p>Email: xxxx@utn.edu.ec</p>
                <a href="https://orcid.org/xxxx-xxxx-xxxxx-xxxxx" class="orcid-btn" target="_blank">ORCID</a>
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
