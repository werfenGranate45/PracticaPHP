<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Me imagino que esta es la forma en la que mostraremos la vista de parte del controlador
       
        return view('main');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Asi es la sintaxis de guardar las variables u algo caon
        $book = new Book([
            'name_book' => "Un video más mi gente",
            'name_author' => "John Pork",
            'price' => 500,
            'gender' => "Freak"
        ]);
    
        $book->save();  
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
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
