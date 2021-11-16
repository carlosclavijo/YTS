<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{

    public function index()
    {
        try{
            $listPeliculas = Pelicula::all();
        }catch (\Exception $e){
            return response()->json(['Response'=>false,'Message'=>'Se ha producido un error']);
        }
        return response()->json(['Response'=>true, 'Peliculas'=> $listPeliculas], 200);
    }

    public function store(Request $request)
    {
        $validator = \Validator::make($request->json()->all(), [
            'nombre' => ['required', 'string'],
            'anio' => ['required', 'integer'],
            'calificacionRTA' => ['required', 'integer'],
            'calificacionRTC' => ['required', 'integer'],
            'calificacionIMDB' => ['required', 'integer'],
            'director' => ['required', 'string'],
            'trailer' => ['required', 'string'],
            'sinopsis' => ['required', 'string'],
            'poster' => ['required', 'string'],
            'generos' => ['required', 'string']
        ]);
        if ($validator->fails()) {
            return response()->json(["Response" => false, "validator" => $validator->messages()]);
        }
        $objPelicula = new Pelicula();
        $objPelicula->nombre = $request->json('nombre');
        $objPelicula->anio = $request->json('anio');
        $objPelicula->calificacionRTA = $request->json('calificacionRTA');
        $objPelicula->calificacionRTC = $request->json('calificacionRTC');
        $objPelicula->calificacionIMDB = $request->json('calificacionIMDB');
        $objPelicula->director = $request->json('director');
        $objPelicula->trailer = $request->json('trailer');
        $objPelicula->sinopsis = $request->json('sinopsis');
        $objPelicula->poster = $request->json('poster');
        $objPelicula->generos = $request->json('generos');
        try {
            $objPelicula->save();
        } catch (\Exception $e) {
            return response()->json(['Response' => false, 'Message' => 'Se ha producido un error']);
        }
        return response()->json(['res' => true, 'Pelicula' => $objPelicula]);
    }

    public function show($idPelicula)
    {
        try {
            $objPelicula = Pelicula::find($idPelicula);
            if ($objPelicula == null) {
                return response()->json(['Response' => false, 'Message' => 'Error, película no encontrada']);
            }
        }catch (\Exception $e){
            return response()->json(['Response'=>false,'Message'=>'Se ha producido un error']);
        }
        return response()->json(['Response'=>true, 'Pelicula'=> $objPelicula], 200);
    }

    public function buscador($valor)
    {
        try {
            $objResultado = Pelicula::where('nombre', 'like', '%'.$valor.'%')->get();
            if ($objResultado == null) {
                return response()->json(['Response' => false, 'Message' => 'No se encontraron coincidencias']);
            }
        }catch (\Exception $e){
            return response()->json(['Response'=>false,'Message'=>'Se ha producido un error']);
        }
        return response()->json(['Response'=>true, 'Peliculas'=> $objResultado], 200);
    }

    public function update(Request $request, $idPelicula)
    {
        $objPelicula = Pelicula::find($idPelicula);
        if ($objPelicula == null) {
            return response()->json(['Response' => false, 'Message' => 'Error, Pelicula no encontrada']);
        }
        if ($request->json('nombre') != null) {
            $objPelicula->nombre = $request->json('nombre');
        }
        if ($request->json('anio') != null) {
            $objPelicula->anio = $request->json('anio');
        }
        if ($request->json('calificacionRTA') != null) {
            $objPelicula->calificacionRTA = $request->json('calificacionRTA');
        }
        if ($request->json('calificacionRTC') != null) {
            $objPelicula->calificacionRTC = $request->json('calificacionRTC');
        }
        if ($request->json('calificacionIMDB') != null) {
            $objPelicula->calificacionIMDB = $request->json('calificacionIMDB');
        }
        if ($request->json('director') != null) {
            $objPelicula->director = $request->json('director');
        }
        if ($request->json('trailer') != null) {
            $objPelicula->trailer = $request->json('trailer');
        }
        if ($request->json('sinopsis') != null) {
            $objPelicula->sinopsis = $request->json('sinopsis');
        }
        if ($request->json('poster') != null) {
            $objPelicula->poster = $request->json('poster');
        }
        if ($request->json('generos') != null) {
            $objPelicula->generos = $request->json('generos');
        }
        try {
            $objPelicula->save();
        } catch (\Exception $e) {
            return response()->json(['Response' => false, 'Message' => 'Ha sucedido un error']);
        }
        return response()->json(['Response' => true, 'Pelicula' => $objPelicula]);
    }

    public function destroy($idPelicula)
    {
        $objPelicula = Pelicula::find($idPelicula);
        if ($objPelicula == null) {
            return response()->json(['Response' => false, 'Message' => 'Error, película no encontrada']);
        }
        try {
            $objPelicula->delete();
        } catch (\Exception $e) {
            return response()->json(['Response' => false, 'Message' => 'Error al ejecutar consulta']);
        }
        return response()->json(['Response' => true]);
    }
}
