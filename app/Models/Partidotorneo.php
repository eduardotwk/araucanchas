<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partidotorneo extends Model
{
    use HasFactory;
    protected $table = 'partidotorneos';
    protected $fillable = [
        'equipo_uno',
        'equipo_dos',
        'hora',
        'fecha',
        'etapa',
        'torneo_id',
    ];
}
