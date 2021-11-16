<?php

namespace Database\Seeders;

use App\Models\Relacion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class RelacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $relacion = new Relacion();
        $relacion->pelicula_id = "1";
        $relacion->relacionada_id = "2";
        $relacion->save();

        $relacion = new Relacion();
        $relacion->pelicula_id = "1";
        $relacion->relacionada_id = "3";
        $relacion->save();

        $relacion = new Relacion();
        $relacion->pelicula_id = "1";
        $relacion->relacionada_id = "4";
        $relacion->save();

        $relacion = new Relacion();
        $relacion->pelicula_id = "1";
        $relacion->relacionada_id = "5";
        $relacion->save();

        $relacion = new Relacion();
        $relacion->pelicula_id = "2";
        $relacion->relacionada_id = "1";
        $relacion->save();

        $relacion = new Relacion();
        $relacion->pelicula_id = "2";
        $relacion->relacionada_id = "3";
        $relacion->save();

        $relacion = new Relacion();
        $relacion->pelicula_id = "2";
        $relacion->relacionada_id = "4";
        $relacion->save();

        $relacion = new Relacion();
        $relacion->pelicula_id = "2";
        $relacion->relacionada_id = "5";
        $relacion->save();

        $relacion = new Relacion();
        $relacion->pelicula_id = "3";
        $relacion->relacionada_id = "1";
        $relacion->save();

        $relacion = new Relacion();
        $relacion->pelicula_id = "3";
        $relacion->relacionada_id = "2";
        $relacion->save();

        $relacion = new Relacion();
        $relacion->pelicula_id = "3";
        $relacion->relacionada_id = "4";
        $relacion->save();

        $relacion = new Relacion();
        $relacion->pelicula_id = "3";
        $relacion->relacionada_id = "5";
        $relacion->save();

        $relacion = new Relacion();
        $relacion->pelicula_id = "4";
        $relacion->relacionada_id = "1";
        $relacion->save();

        $relacion = new Relacion();
        $relacion->pelicula_id = "4";
        $relacion->relacionada_id = "2";
        $relacion->save();

        $relacion = new Relacion();
        $relacion->pelicula_id = "4";
        $relacion->relacionada_id = "3";
        $relacion->save();

        $relacion = new Relacion();
        $relacion->pelicula_id = "4";
        $relacion->relacionada_id = "5";
        $relacion->save();

        $relacion = new Relacion();
        $relacion->pelicula_id = "5";
        $relacion->relacionada_id = "1";
        $relacion->save();

        $relacion = new Relacion();
        $relacion->pelicula_id = "5";
        $relacion->relacionada_id = "2";
        $relacion->save();

        $relacion = new Relacion();
        $relacion->pelicula_id = "5";
        $relacion->relacionada_id = "3";
        $relacion->save();

        $relacion = new Relacion();
        $relacion->pelicula_id = "5";
        $relacion->relacionada_id = "4";
        $relacion->save();
    }
}
