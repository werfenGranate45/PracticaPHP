<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoControllers extends Controller
{
    //

    public function index(){
        print_r(Producto::all());

    }

    public function crear_modelo(){
        $producto = new Producto();
        $producto->nombre_producto = 'Pachocha';
        $producto->precio = 500;

        $producto->save();

    }

    public function crear_array(){
        $array = [
            'nombre_producto' => 'Escoba',
            'precio' => 500,
        ];

        Producto::create($array);
    }

    public function buscar($id){
        print_r(Producto::find($id));
        //Producto::where('nombre_producto','pachocha');
    }

    //Metodo 
    public function consulta(){
        //La funcion get regrea un array de objets, consulatas en php laravel 

       // print_r(Producto::where('nombre_producto','pachocha')->where('precio','>',10)->get());
       //El metodo de ordenamiento parametro (name_colum, asce o desc)
        print_r(Producto::orderBy('nombre_producto','desc')->get());
        
    }

    public function actualizar(){
        $product = Producto::find(1);
        $product->nombre_producto = 'XD';
        $product->save();
    }

    public function eliminar(){
        $product = Producto::find(1);
        $product->delete();
    }
}
