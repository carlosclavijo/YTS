<?php

namespace Database\Seeders;

use App\Models\Pelicula;
use Illuminate\Database\Seeder;

class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelicula = new Pelicula();
        $pelicula->nombre = "Neon Genesis Evangelion: The End of Evangelion";
        $pelicula->anio = "1997";
        $pelicula->calificacionRTA = "85";
        $pelicula->calificacionRTC = "89";
        $pelicula->calificacionIMDB = "81";
        $pelicula->director = "Hideaki Anno";
        $pelicula->trailer = "https://www.youtube.com/embed/hZNpdtUl3jg";
        $pelicula->sinopsis = "En el año 2016 la humanidad se enfrenta a una de las mayores amenazas que el mundo recuerda: los Ángeles, gigantescos seres de las más variadas formas que atacan nuestro planeta sin motivo aparente. Con el objetivo de neutralizarlos, las Naciones Unidas encomendaron a la organización Nerv la creación de unos enormes robots con los que neutralizar la amenaza: los Evangelion. Pero tras conseguirlo, algunos miembros de Nerv han descubierto una conspiración a nivel mundial que desaparecerá la última esperanza para frenar el Tercer Impacto, el Apocalipsis que traerá la aniquilación a toda la raza humana…";
        $pelicula->poster = "Neon Genesis Evangelion - The End of Evangelion.jpg";
        $pelicula->generos = "Animación, Acción, Drama, Psicológico";
        $pelicula->save();

        $pelicula = new Pelicula();
        $pelicula->nombre = "Evangelion: 1.0 You Are (Not) Alone";
        $pelicula->anio = "2007";
        $pelicula->calificacionRTA = "86";
        $pelicula->calificacionRTC = "67";
        $pelicula->calificacionIMDB = "77";
        $pelicula->director = "Hideaki Anno";
        $pelicula->trailer = "rof6qBz84vE";
        $pelicula->sinopsis = "El joven Shinji Ikari es reclutado por la organización secreta NERV para pilotar un inmenso robot en una batalla contra unos seres de otro mundo conocidos como Ángeles.";
        $pelicula->poster = "Evangelion - 1.0 You Are (Not) Alone.jpg";
        $pelicula->generos = "Animación, Acción, Drama, Psicológico";
        $pelicula->save();

        $pelicula = new Pelicula();
        $pelicula->nombre = "Evangelion: 2.0 You Can (Not) Advance";
        $pelicula->anio = "2009";
        $pelicula->calificacionRTA = "89";
        $pelicula->calificacionRTC = "78";
        $pelicula->calificacionIMDB = "80";
        $pelicula->director = "Hideaki Anno";
        $pelicula->trailer = "Qc4v4OJQAeg";
        $pelicula->sinopsis = "Shinji y Rei continúan cargando las esperanzas de la humanidad en sus hombros con la ayuda de dos pilotos nuevos, Asuka y Mari, mientras ellos luchan contra unos ángeles bizarros y monstruosos.";
        $pelicula->poster = "Evangelion - 2.0 You Can (Not) Advance.jpg";
        $pelicula->generos = "Animación, Acción, Drama, Psicológico";
        $pelicula->save();

        $pelicula = new Pelicula();
        $pelicula->nombre = "Evangelion: 3.0 You Can (Not) Redo";
        $pelicula->anio = "2012";
        $pelicula->calificacionRTA = null;
        $pelicula->calificacionRTC = "62";
        $pelicula->calificacionIMDB = "70";
        $pelicula->director = "Hideaki Anno";
        $pelicula->trailer = "1__8I6tjxjM";
        $pelicula->sinopsis = "Shinji despierta en una Tierra arruinada, 14 años después de un tercer impacto, y la gente está en su contra. Él queda atrapado en un ciclo de muerte y renacimiento y continúa luchando con los ángeles mientras el mundo se dirige a su destrucción.";
        $pelicula->poster = "Evangelion - 3.0 You Can (Not) Redo.jpg";
        $pelicula->generos = "Animación, Acción, Drama, Psicológico";
        $pelicula->save();

        $pelicula = new Pelicula();
        $pelicula->nombre = "Evangelion: 3.0+1.0 Thrice Upon a Time.jpg";
        $pelicula->anio = "2021";
        $pelicula->calificacionRTA = "93";
        $pelicula->calificacionRTC = "100";
        $pelicula->calificacionIMDB = "81";
        $pelicula->director = "Hideaki Anno";
        $pelicula->trailer = "GZfuWMDEJpw";
        $pelicula->sinopsis = "Shinji Ikari sigue a la deriva después de perder sus ganas de vivir, pero el lugar al que llega le enseña lo que significa la esperanza. Finalmente, el Proyecto Instrumentalidad se pone en marcha y Wille hace un último y agotador esfuerzo.";
        $pelicula->poster = "Evangelion - 3.0+1.0 Thrice Upon A Time.jpg";
        $pelicula->generos = "Animación, Acción, Drama, Psicológico";
        $pelicula->save();

        /*$pelicula = new Pelicula();
        $pelicula->nombre = "";
        $pelicula->anio = "";
        $pelicula->calificacionRTA = "";
        $pelicula->calificacionRTC = "";
        $pelicula->calificacionIMDB = "";
        $pelicula->director = "";
        $pelicula->trailer = "https://www.youtube.com/embed/";
        $pelicula->sinopsis = "";
        $pelicula->poster = "";
        $pelicula->generos = "";
        $pelicula->save();*/
    }
}
