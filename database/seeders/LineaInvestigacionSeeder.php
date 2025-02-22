<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LineaInvestigacionSeeder extends Seeder
{
    public function run()
    {
        DB::table('lineas_investigacion')->insert([
            [
                'nombre' => 'Producción Industrial y Tecnológica Sostenible',
                'descripcion' => 'Investigación en métodos de producción y tecnologías emergentes para la sostenibilidad industrial.',
                'area_investigacion_id' => 1, // Ingeniería y Tecnología Sostenible
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Desarrollo Agropecuario y Forestal Sostenible',
                'descripcion' => 'Investigación orientada a prácticas sostenibles en la agricultura y manejo de recursos forestales.',
                'area_investigacion_id' => 2, // Agropecuaria y Forestal Sostenible
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Biotecnología, Energía y Recursos Naturales Renovables',
                'descripcion' => 'Estudio de tecnologías en biotecnología aplicadas a la generación de energía y la gestión de recursos naturales renovables.',
                'area_investigacion_id' => 3, // Energía y Recursos Naturales Renovables
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Soberanía, Seguridad e Inocuidad Alimentaria Sustentable',
                'descripcion' => 'Investigación para garantizar la seguridad alimentaria y el desarrollo sustentable en la producción de alimentos.',
                'area_investigacion_id' => 4, // Seguridad e Inocuidad Alimentaria
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Gestión, Producción, Productividad, Innovación y Desarrollo Socioeconómico',
                'descripcion' => 'Estudio de estrategias para mejorar la productividad y fomentar el desarrollo socioeconómico a través de la innovación.',
                'area_investigacion_id' => 5, // Gestión y Desarrollo Socioeconómico
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Desarrollo, Aplicación de Software y Ciberseguridad',
                'descripcion' => 'Investigación en el desarrollo de software y soluciones en ciberseguridad para entornos sostenibles.',
                'area_investigacion_id' => 1, // Ingeniería y Tecnología Sostenible
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Educación y Capacitación en Ingeniería Circular y Sostenible',
                'descripcion' => 'Proyectos enfocados en la formación y capacitación para impulsar la ingeniería circular y sostenible.',
                'area_investigacion_id' => 6, // Educación y Capacitación en Ingeniería Sostenible
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
