<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("pelicula_id")->unsigned();
            $table->foreign("pelicula_id")->references("id")->on("peliculas")->onDelete("cascade");
            $table->bigInteger("relacionada_id")->unsigned();
            $table->foreign("relacionada_id")->references("id")->on("peliculas")->onDelete("cascade");
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
        Schema::dropIfExists('relacions');
    }
}
