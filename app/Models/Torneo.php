<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    use HasFactory;
    protected $table = 'torneos';
    protected $fillable = [
        'id',
        'nombre_torneo',
        'cantidad_equipo',
        'info_torneo',

    ];
}
