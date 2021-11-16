<?php

namespace App\Http\Controllers;

use App\Models\Relacion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RelacionController extends Controller
{
    public function index()
    {
        try{
            $ListRelacion = Relacion::all();
        }catch (\Exception $e){
            return response()->json(['Response'=>false,'Message'=>'Se ha producido un error']);
        }
        return response()->json(['Response'=>true, 'Relacion'=> $ListRelacion]);
    }

    public function store(Request $request)
    {
        $validator = \Validator::make($request->json()->all(), [
            'pelicula_id' => ['required', 'integer'],
            'relacionada_id' => ['required', 'integer']
        ]);
        if ($validator->fails()) {
            return response()->json(["Response" => false, "validator" => $validator->messages()]);
        }
        $objRelacion = new Relacion();
        $objRelacion->pelicula_id = $request->json('pelicula_id');
        $objRelacion->relacionada_id = $request->json('relacionada_id');
        try {
            $objRelacion->save();
        } catch (\Exception $e) {
            return response()->json(['Response' => false, 'Message' => 'Se ha producido un error']);
        }
        return response()->json(['Response' => true, 'Relaciones' => $objRelacion]);
    }

    public function show($idRelacion)
    {
        try {
            $objRelacion = Relacion::find($idRelacion);
            if ($objRelacion == null) {
                return response()->json(['Response' => false, 'Message' => 'Error, relación no encontrada']);
            }
        }catch (\Exception $e){
            return response()->json(['Response'=>false,'Message'=>'Se ha producida un error']);
        }
        return response()->json(['Response'=>true, 'Relaciones'=> $objRelacion]);
    }

    public function update(Request $request, $idRelacion)
    {
        $objRelacion = Relacion::find($idRelacion);
        if ($objRelacion == null) {
            return response()->json(['Response' => false, 'Message' => 'Error, Relacion no encontrada']);
        }
        if ($request->json('pelicula_id') != null) {
            $objRelacion->pelicula_id = $request->json('pelicula_id');
        }
        if ($request->json('relacionada_id') != null) {
            $objRelacion->relacionada_id = $request->json('relacionada_id');
        }
        try {
            $objRelacion->save();
        } catch (\Exception $e) {
            return response()->json(['Response' => false, 'Message' => 'Se ha producido un error']);
        }
        return response()->json(['Response' => true, 'Relaciones' => $objRelacion]);
    }

    public function destroy($idRelacion)
    {
        $objRelacion = Relacion::find($idRelacion);
        if ($objRelacion == null) {
            return response()->json(['Response' => false, 'Message' => 'Error, relación no encontrada']);
        }
        try {
            $objRelacion->delete();
        } catch (\Exception $e) {
            return response()->json(['Response' => false, 'Message' => 'Se ha producido un error']);
        }
        return response()->json(['Response' => true]);
    }
}
