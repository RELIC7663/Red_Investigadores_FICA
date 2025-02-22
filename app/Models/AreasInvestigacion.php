<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreasInvestigacion extends Model
{
    use HasFactory;

    protected $table = 'areas_investigacion';
    
    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    // Relación: un área tiene muchas líneas de investigación
    public function lineasInvestigacion()
    {
        return $this->hasMany(LineaInvestigacion::class, 'area_investigacion_id');
    }
}
