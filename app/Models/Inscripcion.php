<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;
    protected $table = 'inscripcion';
    protected $fillable = [
        'id',
        'valor_inscripcion',
        'fecha_torneo',
        'equipo_id',
        'torneo_id',
    ];
}
