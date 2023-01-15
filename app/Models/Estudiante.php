<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;


    protected $fillable = [
        'nombre',
        'apellidoPaterno',
        'apellidoMaterno',
        'edad',
        'fechaDeNacimiento',
        'direccion',
        'ciudad',
        'estado',
        'codigoPostal',
        'genero',
        'numeroTelefonico',
        'correo',
    ];

}
