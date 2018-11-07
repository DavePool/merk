<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //
    protected $fillable = [
        'nombre_articulo', 'descripcion_articulo', 'existencia_articulo',
    ];
}
