<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineaInvestigacion extends Model
{
    use HasFactory;
    
    protected $table = 'lineas_investigacion';

    protected $fillable = [
        'nombre',
        'descripcion',
        'area_investigacion_id'
    ];

    // Relación: una línea de investigación pertenece a un área de investigación
    public function areaInvestigacion()
    {
        return $this->belongsTo(AreasInvestigacion::class, 'area_investigacion_id');
    }
}
