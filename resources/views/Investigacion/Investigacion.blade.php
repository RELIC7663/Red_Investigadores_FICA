<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divulgación Científica</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    
</head>
<body>

@extends('layouts.app')  
    <div class="container my-4">
        <h2 class="fw-bold">Divulgación Científica</h2>

        <!-- Tabs para cambiar de año -->
        <ul class="nav nav-tabs mt-3" id="yearTabs">
            <li class="nav-item">
                <a class="nav-link active" id="tab2023" data-bs-toggle="tab" href="#content2023">2023</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab2024" data-bs-toggle="tab" href="#content2024">2024</a>
            </li>
        </ul>

        <div class="tab-content mt-4">
            <!-- Contenido del 2023 -->
            <div class="tab-pane fade show active" id="content2023">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Autor</th>
                                <th>Proyecto</th>
                                <th>Entrevista</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="date">6/4/2023</td>
                                <td>MSc. Jorge Gordón</td>
                                <td>Técnicas de procesamiento automático aplicadas al análisis y predicción del consumo de drogas.</td>
                                <td>
                                    <div class="video-container">
                                        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="date">20/4/2023</td>
                                <td>MSc. Pedro Zambrano</td>
                                <td>Trasplante de mitocondrias como nueva terapia para mejorar la regeneración de tejido en heridas.</td>
                                <td>
                                    <div class="video-container">
                                        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Contenido del 2024 -->
            <div class="tab-pane fade" id="content2024">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Autor</th>
                                <th>Proyecto</th>
                                <th>Entrevista</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="date">12/3/2024</td>
                                <td>MSc. Andrea López</td>
                                <td>Uso de inteligencia artificial en la detección temprana de enfermedades cardiovasculares.</td>
                                <td>
                                    <div class="video-container">
                                        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="date">25/5/2024</td>
                                <td>Dr. Juan Pérez</td>
                                <td>Avances en la nanotecnología para el tratamiento de cáncer.</td>
                                <td>
                                    <div class="video-container">
                                        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
