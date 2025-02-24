<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /* 
    * Es un metodo que crea columnos asi bien raras a la verga 
    * El HasUudis hace que no sea autoincremental tu desmadre de 
    * las ideas por eso es mejor no ponerlo y que en automatico sea 
    * autoincremental
    */


    /**
     * La clase Model, es la clase equivalente en objects en Django
     * es decir es la clase que te permite interactuar con la base de datos 
     * desde el Dbaver hasta codigo
     */
    use HasFactory;
    //
    /**
     * Aqui va la variable a la que apunta la tabla, me imagino
     * que ese string tienen que tener el mismo nombre de la tabla
     * registrada en la base de datos y apunta 
     * 
     * @var String
     */

   protected $table = 'books';

   /**
    * Para apuntar a las columnas de la base de datos usamos un array??
    * que contien el nombre de las columnas de la tabla en la base de datos
    *
    * @var ArrayList
    */

   protected $fillable = [
    'name_book',
    'name_author',
    'price',
    'gender'
   ];

}
