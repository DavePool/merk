<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    protected $fillabel = [
        'nombre_departamento','encargado_departamento','extension_departamento','rol_departamento','password_departamento',
    ];
}
