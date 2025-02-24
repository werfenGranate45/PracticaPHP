<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * Ocupamos el nombre del libro 'Un delimitador de 100 characteres'
     * Ocupamos el nombre del autro 'Un delimitador de 50 caracteres'
     * Ocupamos el precio del libro 'Precio default 0'
     * Genero ocupamos el precio 'Un delimitador de 50 caracteres'
     * 
     * Ojo esa parametro dentro de la clase envolente significa el nombre de
     * la columno en donde se guardaran los datos
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name_book');
            $table->string('name_author');
            $table->integer('price')->default(0);
            $table->string('gender');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
