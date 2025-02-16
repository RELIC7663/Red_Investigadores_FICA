@extends('layouts.app')

@section('title', 'Estatutos - Red Investigadores')

@section('content')

<!-- Contenedor Principal -->
<div class="container my-5 bg-white p-4">
    <h1 class="fw-bold text-center mb-4">Estatutos de RIPIS</h1>
    <div class="d-flex justify-content-center my-4">
        <img src="images/logo_R.png" alt="Logo RIPIS" class="me-2" style="max-height: 200px;" />
    </div>
    <div class="bg-white p-4 rounded shadow-sm">
        <h2 class="fw-bold mt-4 text-center">CONSIDERANDO</h2>
        <div class="m-4">
            <p class="mt-3" style="text-align: justify;">La Red Internacional de Investigación de Procesos en Ingeniería Sostenible (RIPIS). Se basa en normativas internacionales como la Declaración Universal de los Derechos Humanos y artículos de la Constitución de la República que promueven el acceso equitativo al conocimiento, la investigación científica, y la innovación tecnológica. Además, se menciona la creación de la Red Internacional de Ingeniería y Ciencias Aplicadas el 20 de octubre de 2023, que antecede a la RIPIS.</p>
        </div>

        <h2 class="fw-bold mt-4 text-center">OBJETO Y ATRIBUCIONES</h2>
        <div class="m-4">
            <p class="mt-3" style="text-align: justify;">La Red Internacional de Investigación de Procesos en Ingeniería Sostenible (RIPIS) tiene el objetivo de normar su organización y funcionamiento, con el fin de fortalecer políticas públicas y estrategias relacionadas con la investigación en ingeniería sostenible. Se enfoca en:</p>
        </div>

        <h3 class="ms-3">Atribuciones</h3>
        <ul class="m-4 " style="text-align: justify;">
            <li class="mt-3 ">Promover políticas públicas para el desarrollo de la investigación.</li>
            <li class="mt-3">Establecer relaciones con otras redes nacionales e internacionales.</li>
            <li class="mt-3">Impulsar el debate de problemáticas de ingeniería sostenible.</li>
            <li class="mt-3">Fomentar la difusión de investigaciones.</li>
            <li class="mt-3">Apoyar a sus miembros en temas de investigación.</li>
        </ul>

        <h2 class="fw-bold mt-4 text-center">DE LOS MIEMBROS</h2>


        <p class="mt-3 ms-4 " style="text-align: justify;">La Red Internacional de Investigación de Procesos en Ingeniería Sostenible (RIPIS) estará conformada prioritariamente por investigadores de las instituciones de educación superior de naturaleza pública y/o privada, institutos públicos y privados de investigación, organizaciones no gubernamentales, cámaras productivas, asociaciones,
            entidades privadas y públicas, y personas naturales vinculadas a la investigación en
            procesos de ingeniería sostenible.
        </p>

        <h3 class="ms-3">Categorías de miembros</h3>
        <ul class="m-4" style="text-align: justify;">
            <li class="mt-3"><strong>Fundadores:</strong> Quienes firmaron el acta de creación de la red.</li>
            <li class="mt-3"><strong>Activos:</strong> Miembros aceptados por el Comité Directivo.</li>
            <li class="mt-3"><strong>Honorarios:</strong> Personas de renombre reconocidas por la Asamblea General.</li>
        </ul>

        <h3 class="ms-3">Deberes y atribuciones</h3>
        <ul class="m-4" style="text-align: justify;">
            <li class="mt-3">Cumplir las normativas de la RIPIS.</li>
            <li class="mt-3">Asistir puntualmente a las reuniones.</li>
            <li class="mt-3">Participar con voz y voto en la Asamblea General.</li>
            <li class="mt-3">Proponer y presentar proyectos de investigación.</li>
        </ul>

        <h2 class="fw-bold mt-4 text-center">ADMISIÓN Y EXCLUSIÓN</h2>
        <h3 class="ms-3">Admisión</h3>
        <p class="mt-3 ms-4 " style="text-align: justify;">Para ser admitido en la RIPIS, los candidatos deben enviar una solicitud a la Secretaría, dirigida al Presidente del Comité Directivo, la cual será evaluada en un plazo de cinco días (Artículo 9). Los interesados, ya sean personas naturales o jurídicas, deben demostrar haber promovido actividades de investigación, participado en eventos relacionados o presentar una propuesta de investigación, y en el caso de miembros institucionales, acreditar su representatividad (Artículo 10). Además, el Comité Directivo o cualquier miembro de la red pueden solicitar la exclusión de integrantes que incumplan las normativas, decidiéndose la exclusión por mayoría de votos de forma definitiva (Artículo 11). Finalmente, los miembros pueden solicitar su disociación voluntaria mediante una solicitud al Presidente del Comité Directivo, quien evaluará el caso (Artículo 12).</p>

        <h3 class="ms-3">Requisitos</h3>
        <ul class="m-4" style="text-align: justify;">
            <li class="mt-3">Haber promovido y desarrollado actividades de investigación.</li>
            <li class="mt-3">Participar en eventos relacionados con procesos de ingeniería sostenible.</li>
            <li class="mt-3">Para miembros institucionales, presentar documentos de representatividad.</li>
        </ul>

        <h3 class="ms-3">Exclusión</h3>
        <p class="mt-3 ms-4 " style="text-align: justify;">El Comité Directivo o cualquiera de los miembros de la Red Internacional de
            Investigación de Procesos en Ingeniería Sostenible (RIPIS) podrán solicitar la exclusión de
            uno o varios miembros en caso de incumplimiento de las disposiciones normativas
            establecidas por la RED. El Comité Directivo resolverá por mayoría de votos y de manera
            definitiva sobre la exclusión del miembro.
        </p>

        <h2 class="fw-bold mt-4 text-center">DE LA ASAMBLEA GENERAL</h2>

        <p class="mt-3 ms-4 " style="text-align: justify;">La Asamblea General es la máxima autoridad de la RIPIS y está formada por todos los miembros. Se celebran dos tipos de asambleas:</p>

        <ul class="m-4" style="text-align: justify;">
            <li class="mt-3">Ordinarias: Al menos una vez al año, para fijar los objetivos, conocer y aprobar informes y balances, realizar elecciones y tratar asuntos relacionados con los intereses de la red, excepto los que corresponden a asambleas extraordinarias (Artículo 13, 14, y 15).</li>
            <li class="mt-3">Extraordinarias: Convocadas cuando sea necesario para la buena marcha de la red o por solicitud del 30% de los miembros. Tratan temas como reformas del estatuto, disolución de la red, transacciones importantes y reclamaciones contra miembros del Comité Directivo (Artículo 16 y 17).</li>

        </ul>

        <p class="mt-3 ms-4 " style="text-align: justify;">Para tener voz y voto en la asamblea, los miembros deben cumplir ciertos requisitos: ser miembro fundador, estar activo por 6 meses, y haber participado en al menos el 70% de las reuniones (Artículo 18). Las obligaciones de los miembros incluyen asistir al menos al 50% de las reuniones, participar en actividades planificadas y desempeñar los cargos para los que han sido elegidos (Artículo 19).</p>
        <p class="mt-3 ms-4 " style="text-align: justify;"> La calidad de miembro se pierde por fallecimiento, renuncia, ausencia superior al 50% de las reuniones, o incumplimiento de actividades (Artículo 20). La asamblea debe ser convocada con al menos 8 días de anticipación (Artículo 21), y puede sesionar válidamente con la mayoría absoluta o, después de 60 minutos, con el 33% de los miembros con derecho a voto (Artículo 22). Los acuerdos se adoptan por mayoría absoluta, salvo en casos especiales establecidos en el estatuto (Artículo 23). Los miembros pueden ser subrogados, pero cada uno solo puede emitir un voto (Artículo 24).</p>

        <h2 class="fw-bold mt-4 text-center">DEL COMITÉ DIRECTIVO</h2>

        <div class="d-flex flex-wrap">
            <div class="card m-2" style="width: 23%;">
                <div class="card-body">
                    <h3 class="card-title text-center">Presidente/a</h3>
                    <ul>
                        <li>Convocar y presidir reuniones.</li>
                        <li>Representar oficialmente a la RIPIS.</li>
                        <li>Impulsar proyectos y estrategias de la red.</li>
                    </ul>
                </div>
            </div>
            <div class="card m-2" style="width: 23%;">
                <div class="card-body">
                    <h3 class="card-title text-center">Vicepresidente/a</h3>
                    <ul>
                        <li>Suplir al Presidente/a en caso de ausencia.</li>
                        <li>Supervisar el cumplimiento de los objetivos de la RIPIS.</li>
                    </ul>
                </div>
            </div>
            <div class="card m-2" style="width: 23%;">
                <div class="card-body">
                    <h3 class="card-title text-center">Vocales</h3>
                    <ul>
                        <li>Promover las actividades de la RIPIS.</li>
                        <li>Reemplazar temporalmente a otros directivos si es necesario.</li>
                    </ul>
                </div>
            </div>
            <div class="card m-2" style="width: 23%;">
                <div class="card-body">
                    <h3 class="card-title text-center">Secretaría</h3>
                    <ul>
                        <li>Redactar y custodiar actas de reuniones.</li>
                        <li>Gestionar la documentación de la RIPIS.</li>
                        <li>Supervisar el cumplimiento del estatuto.</li>
                    </ul>
                </div>
            </div>
        </div>


        <h2 class="fw-bold mt-4 text-center">DISPOSICIONES FINALES</h2>
        <div class="text-center">

            <p class="mt-3 ms-4">La Secretaría se encargará de la difusión del presente Estatuto a todos los miembros de la Red.</p>

            <p class="fw-bold mt-3 ms-4">Dado en la ciudad de Ibarra, a los 27 días del mes de septiembre de 2024.</p>

        </div>

    </div>
</div>


@endsection