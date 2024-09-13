<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estiramientos extends Model
{
    use HasFactory;

    protected $table = 'estiramientos';

    protected $fillable = [
        'nombre', 'descripcion', 'nivel_dificultad', 'duracion_minutos'
    ];
}
