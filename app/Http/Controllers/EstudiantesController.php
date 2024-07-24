<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiantes;
use Illuminate\Support\Facades\DB;

class EstudiantesController extends Controller
{
    public function create()
    {
        return view("estudiantes.create");
    }

    public function store(Request $request)
    {


       $estudiante =  DB::table('estudiantes')->insert([
            'nombre' => $request->nombre, 
            'curso' => $request->curso, 
            'telefono' => $request->telefono, 
            'correo' => $request->correo
        ]);
        dd($estudiante);
        /**
         * @var  ESTA ES UNA CREACIÓN CON ELOQUENT ORM
         */
        $estudiante = Estudiantes::create([
            'nombre' => $request->nombre, 
            'curso' => $request->curso, 
            'telefono' => $request->telefono, 
            'correo' => $request->correo
        ]);   

        dd($estudiante);     
    }
}
