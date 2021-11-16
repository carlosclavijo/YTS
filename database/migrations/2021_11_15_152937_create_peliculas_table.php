<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string("nombre", 100);
            $table->integer("anio");
            $table->integer("calificacionRTA")->nullable();
            $table->integer("calificacionRTC")->nullable();
            $table->integer("calificacionIMDB")->nullable();
            $table->string("director", 50);
            $table->string("trailer")->unique();
            $table->string("sinopsis", 1000)->unique()->nullable();
            $table->string("poster")->unique();
            $table->string("generos", 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
}
