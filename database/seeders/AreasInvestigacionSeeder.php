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
                'nombre' => 'Ingeniería y Tecnología Sostenible',
                'descripcion' => 'Incluye líneas de investigación en producción industrial, desarrollo de software y ciberseguridad, orientadas a soluciones tecnológicas sostenibles.'
            ],
            [
                'nombre' => 'Agropecuaria y Forestal Sostenible',
                'descripcion' => 'Se enfoca en el desarrollo de prácticas sostenibles en la agricultura y el manejo forestal.'
            ],
            [
                'nombre' => 'Energía y Recursos Naturales Renovables',
                'descripcion' => 'Fomenta el uso de energías renovables y la gestión sostenible de recursos naturales.'
            ],
            [
                'nombre' => 'Seguridad e Inocuidad Alimentaria',
                'descripcion' => 'Promueve prácticas que aseguren la soberanía alimentaria y la inocuidad en la producción de alimentos.'
            ],
            [
                'nombre' => 'Gestión y Desarrollo Socioeconómico',
                'descripcion' => 'Orientado a la mejora en la gestión, productividad e innovación con impacto social y económico.'
            ],
            [
                'nombre' => 'Educación y Capacitación en Ingeniería Sostenible',
                'descripcion' => 'Se centra en la formación y capacitación para el desarrollo de la ingeniería circular y sostenible.'
            ],
        ];

        foreach ($areas as $area) {
            AreasInvestigacion::create($area);
        }
    }
}
