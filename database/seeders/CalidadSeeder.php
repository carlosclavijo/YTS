<?php

namespace Database\Seeders;

use App\Models\Calidad;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class CalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $calidad = new Calidad();
        $calidad->resolucion = "360p.mp4";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "1";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "480.mp4";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "1";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "720p.mp4";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "1";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "480p.mp4";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "2";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "720p.mp4";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "2";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "1080p.mp4";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "2";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "720p.BluRay";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "2";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "1080.BluRay";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "2";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "2160p.BluRay";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "2";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "480p.mp4";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "3";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "720p.mp4";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "3";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "1080p.mp4";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "3";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "720p.BluRay";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "3";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "1080.BluRay";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "3";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "2160p.BluRay";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "3";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "480p.mp4";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "4";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "720p.mp4";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "4";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "1080p.mp4";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "4";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "720p.BluRay";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "4";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "1080.BluRay";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "4";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "2160p.BluRay";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "4";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "480p.mp4";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "5";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "720p.mp4";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "5";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "1080p.mp4";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "5";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "720p.BluRay";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "5";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "1080.BluRay";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "5";
        $calidad->save();

        $calidad = new Calidad();
        $calidad->resolucion = "2160p.BluRay";
        $calidad->ubicacion = null;
        $calidad->pelicula_id = "5";
        $calidad->save();
    }
}
