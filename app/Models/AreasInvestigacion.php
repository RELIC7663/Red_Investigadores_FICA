<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreasInvestigacion extends Model
{
    use HasFactory;

    protected $table = 'areas_investigacion'; // Especificar nombre de tabla
    
    protected $fillable = [
        'titulo',
        'descripcion'
    ];
}