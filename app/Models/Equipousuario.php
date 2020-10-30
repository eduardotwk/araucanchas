<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipousuario extends Model
{
    use HasFactory;
    protected $table = 'equipousuarios';
    protected $fillable = [
        'equipo_id',
        'user_id',
    ];
}
