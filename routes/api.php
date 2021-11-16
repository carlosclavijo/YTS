<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\PeliculaController;
use \App\Http\Controllers\CalidadController;
use \App\Http\Controllers\RelacionController;

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

//Users
Route::get('/user/', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::post('/user/', [UserController::class, 'store']);
Route::put('/user/{id}', [UserController::class, 'update']);
Route::delete('/user/{id}', [UserController::class, 'destroy']);

//Peliculas
Route::get('/pelicula/', [PeliculaController::class, 'index']);
Route::get('/pelicula/{id}', [PeliculaController::class, 'show']);
Route::get('/pelicula/search/{valor}', [PeliculaController::class, 'buscador']);
Route::post('/pelicula/', [PeliculaController::class, 'store']);
Route::put('/pelicula/{id}', [PeliculaController::class, 'update']);
Route::delete('/pelicula/{id}', [PeliculaController::class, 'destroy']);

//Calidades
Route::get('/calidad/', [CalidadController::class, 'index']);
Route::get('/calidad/{id}', [CalidadController::class, 'show']);
Route::post('/calidad/', [CalidadController::class, 'store']);
Route::put('/calidad/{id}', [CalidadController::class, 'update']);
Route::delete('/calidad/{id}', [CalidadController::class, 'destroy']);

//Relaccion
Route::get('/relacion/', [RelacionController::class, 'index']);
Route::get('/relacion/{id}', [RelacionController::class, 'show']);
Route::post('/relacion/', [RelacionController::class, 'store']);
Route::put('/relacion/{id}', [RelacionController::class, 'update']);
Route::delete('/relacion/{id}', [RelacionController::class, 'destroy']);
