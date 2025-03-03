<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProductoControllers;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books',BookController::class);


Route::get('index',[BookController::class,'index']);
Route::get('create', [BookController::class,'create']);
Route::get('store',[BookController::class,'store']);
Route::get('show',[BookController::class,'show']);

/*Estas son las rutas de las practicas del modelo
Route::get('crearP',[ProductoControllers::class,'crear_modelo']);
Route::get('index',[ProductoControllers::class,'index']);
Route::get('crearA',[ProductoControllers::class,'crear_array']);
Route::get('Buscar/{id}',[ProductoControllers::class,'buscar']);
Route::get('buscar',[ProductoControllers::class,'consulta']);
Route::get('Actualizar',[ProductoControllers::class,'actualizar']);
Route::get('Eliminar',[ProductoControllers::class,'eliminar']);
*/