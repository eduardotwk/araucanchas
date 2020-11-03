<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipoUsuario extends Model
{
    use HasFactory;
    protected $table = 'EquipoUsuarios';
    protected $fillable = [
        'equipo_id',
        'user_id',
    ];
}
