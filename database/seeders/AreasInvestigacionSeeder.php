<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AreasInvestigacion;

class AreasInvestigacionSeeder extends Seeder
{
    public function run()
    {
        $areas = [
            [
                'titulo' => 'Inteligencia Artificial',
                'descripcion' => 'Desarrollo de modelos avanzados de aprendizaje automático'
            ],
            [
                'titulo' => 'Ingeniería Ambiental',
                'descripcion' => 'Tecnologías sostenibles y energías renovables'
            ],
            [
                'titulo' => 'Nanotecnología',
                'descripcion' => 'Aplicaciones en medicina y nuevos materiales'
            ]
        ];

        foreach ($areas as $area) {
            AreasInvestigacion::create($area);
        }
    }
}