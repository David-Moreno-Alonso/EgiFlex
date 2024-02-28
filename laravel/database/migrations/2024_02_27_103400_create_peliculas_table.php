<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('director');
            $table->date('ano_lanzamiento');
            $table->text('sinopsis');
            $table->integer('duracion');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peliculas');
    }
};