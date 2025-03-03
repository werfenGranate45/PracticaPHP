<?php

namespace App\Http\Controllers;

use App\Models\Book;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('presentation');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Me imagino que esta es la forma en la que mostraremos la vista de parte del controlador
       
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     * Request $request
     */
    public function store(Request $request)
    {
        $request = [
            'name_book' => 'El libro vaquero',
            'name_author' => 'John Pork',
            'gender' => 'Rizz'
        ];
        //Asi es la sintaxis de guardar las variables u algo caon
         
        //Tenemos en rques un diccionario de claves valor donde se van a guardar las varables del usuario
        //Las formar de guardar ya tenemos mas bien como vinculamos eso datoss
        
        Book::create($request);    
        return view("confirmationStorageL");
    }

    /**
     * Display the specified resource.
     * En este caso mostrate todo los libros y sua atributos asi bien insanos con HTML
     * Ese arreglo que tiene como parametro se usa para darle la informacion a mostrar 
     */
    public function show(Book $book)
    {
        //Ok En el blade al momento "de instaciar" un objeto en las vistas de Html, pues lo hacemos de un diccionario
        //El valor clave sera la mostrada en el Html bueno la usada y con blade puedes usar codigo php
        
        return view("show",[
            'Books' => $book->all()

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
