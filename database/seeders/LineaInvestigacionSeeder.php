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
                'autor'     => 'Dr. Juan Pérez',
                'proyecto'  => 'Desarrollo de inteligencia artificial para análisis de datos',
                'fecha'     => Carbon::parse('2024-01-15'),
                'video_url' => 'https://www.youtube.com/watch?v=ejemplo1',
                'anio'      => 2024,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'autor'     => 'MSc. María Gómez',
                'proyecto'  => 'Optimización de algoritmos en redes neuronales',
                'fecha'     => Carbon::parse('2023-08-10'),
                'video_url' => 'https://www.youtube.com/watch?v=ejemplo2',
                'anio'      => 2023,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'autor'     => 'Ing. Carlos Ramírez',
                'proyecto'  => 'Implementación de blockchain en seguridad informática',
                'fecha'     => Carbon::parse('2022-05-20'),
                'video_url' => 'https://www.youtube.com/watch?v=ejemplo3',
                'anio'      => 2022,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
