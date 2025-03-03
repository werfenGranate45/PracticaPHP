<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //Parametros de configuracion
    protected $table = 'producto';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre_producto',
        'precio',
        'color'
    ];

    public $timestamps = true;
}
