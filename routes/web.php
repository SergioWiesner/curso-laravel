<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get("estudiantes/create", "App\Http\Controllers\EstudiantesController@create")->name("estudiante.create");
    Route::post("estudiantes/store", "App\Http\Controllers\EstudiantesController@store")->name("estudiante.store");
    Route::get("estudiantes/index", "App\Http\Controllers\EstudiantesController@index")->name("estudiante.index");
    Route::put("estudiantes/update/{id}", "App\Http\Controllers\EstudiantesController@update")->name("estudiante.update");
    Route::get("estudiantes/{id}", "App\Http\Controllers\EstudiantesController@edit")->name("estudiante.edit");
    Route::delete("estudiantes/{id}/eliminar", "App\Http\Controllers\EstudiantesController@delete")->name("estudiante.delete");

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__ . '/auth.php';
