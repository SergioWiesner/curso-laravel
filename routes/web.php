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
Route::get("estudiantes/index", "App\Http\Controllers\EstudiantesController@index")->name("estudiante.index");
Route::put("estudiantes/update/{id}", "App\Http\Controllers\EstudiantesController@update")->name("estudiante.update");
Route::get("estudiantes/{id}", "App\Http\Controllers\EstudiantesController@edit")->name("estudiante.edit");
Route::delete("estudiantes/{id}/eliminar", "App\Http\Controllers\EstudiantesController@delete")->name("estudiante.delete");