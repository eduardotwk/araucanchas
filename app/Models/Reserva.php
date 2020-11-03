<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $table = 'reservas';
    protected $fillable = [
        'id',
        'fecha',
        'hora_inicio',
        'hora_fin',
        'canchas_id',
    ];
}
