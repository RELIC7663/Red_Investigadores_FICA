<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineaInvestigacion extends Model
{
    use HasFactory;
    protected $table = 'lineas_investigacion';

    protected $casts = [
        'fecha' => 'date', 
    ];

    protected $fillable = [
        'autor',
        'proyecto',
        'fecha',
        'video_url',
        'anio'
    ];
}