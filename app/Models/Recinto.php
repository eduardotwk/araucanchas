<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recinto extends Model
{
    use HasFactory;
    protected $table = 'recintos';
    protected $fillable = [
        'id',
        'nombre_recinto',
        'ubicacion',
        'contacto',
        'cantidad_cancha',
    ];
}
