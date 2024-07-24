<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('hola/mundo', 'App\Http\Controllers\HolaMundoController@holaMundo');
Route::get('hola', function () {
    return view('hola');
});

Route::get("estudiantes/create", "App\Http\Controllers\EstudiantesController@create");
Route::post("estudiantes/store", "App\Http\Controllers\EstudiantesController@store")->name("estudiante.store");