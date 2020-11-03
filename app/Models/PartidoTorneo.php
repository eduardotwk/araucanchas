<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartidoTorneo extends Model
{
    use HasFactory;
    protected $table = 'partido_torneo';
    protected $fillable = [
        'equipo_uno',
        'equipo_dos',
        'hora',
        'fecha',
        'etapa',
        'torneo_id',
    ];
}
