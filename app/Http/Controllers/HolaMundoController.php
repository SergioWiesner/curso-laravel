<?php

namespace App\Http\Controllers;

use App\Resources\Estudiantes\Manager;
use Illuminate\Http\Request;

class HolaMundoController extends Controller
{
    public function holaMundo(){
        $manager = new Manager();
        return view("holamundo")
        ->with("dato", array("Hola como parametro adicional"))
        ->with("estudiante", $manager->listarRegistros());
    }
}
