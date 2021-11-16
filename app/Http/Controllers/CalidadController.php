<?php

namespace App\Http\Controllers;

use App\Models\Calidad;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CalidadController extends Controller
{

    public function index()
    {
        try{
            $listCalidad = Calidad::all();
        }catch (\Exception $e){
            return response()->json(['Response'=>false,'Message'=>'Se ha producido un error']);
        }
        return response()->json(['Response'=>true, 'Calidades'=> $listCalidad]);
    }

    public function store(Request $request)
    {
        $validator = \Validator::make($request->json()->all(), [
            'resolucion' => ['required', 'string'],
            'ubicacion' => ['required', 'string'],
            'pelicula_id' => ['required', 'integer'],
        ]);
        if ($validator->fails()) {
            return response()->json(["Response" => false, "validator" => $validator->messages()]);
        }
        $objCalidad = new Calidad();
        $objCalidad->resolucion = $request->json('resolucion');
        $objCalidad->ubicacion = $request->json('ubicacion');
        $objCalidad->pelicula_id = $request->json('pelicula_id');
        try {
            $objCalidad->save();
        } catch (\Exception $e) {
            return response()->json(['Response' => false, 'Message' => 'Error al ejecutar consulta']);
        }
        return response()->json(['Response' => true, 'Calidad' => $objCalidad]);
    }

    public function show($idCalidad)
    {
        try {
            $objCalidad = Calidad::find($idCalidad);
            if ($objCalidad == null) {
                return response()->json(['Response' => false, 'Message' => 'Error, calidad no encontrada']);
            }
        }catch (\Exception $e){
            return response()->json(['Response'=>false, 'Message'=>'Se ha producido un error']);
        }
        return response()->json(['Response'=>true, 'Calidad'=> $objCalidad]);
    }

    public function update(Request $request, $idCalidad)
    {
        $objCalidad = Calidad::find($idCalidad);
        if ($objCalidad == null) {
            return response()->json(['Response' => false, 'Message' => 'Error, calidad no encontrada']);
        }
        if ($request->json('resolucion') != null) {
            $objCalidad->resolucion = $request->json('resolucion');
        }
        if ($request->json('ubicacion') != null) {
            $objCalidad->ubicacion = $request->json('ubicacion');
        }
        if ($request->json('pelicula_id') != null) {
            $objCalidad->pelicula_id = $request->json('pelicula_id');
        }
        try {
            $objCalidad->save();
        } catch (\Exception $e) {
            return response()->json(['Response' => false, 'Message' => 'Se ha producido un error']);
        }
        return response()->json(['Response' => true, 'Calidad' => $objCalidad]);
    }

    public function destroy($idCalidad)
    {
        $objCalidad = Calidad::find($idCalidad);
        if ($objCalidad == null) {
            return response()->json(['Response' => false, 'Message' => 'Error, calidad no encontrada']);
        }
        try {
            $objCalidad->delete();
        } catch (\Exception $e) {
            return response()->json(['Response' => false, 'Message' => 'Se ha producido un error']);
        }
        return response()->json(['Response' => true]);
    }
}
