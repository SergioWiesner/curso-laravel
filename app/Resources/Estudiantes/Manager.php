<?php

namespace App\Resources\Estudiantes;

use App\Models\Estudiantes;

class Manager
{
    public function listarRegistros()
    {
        return Estudiantes::all();
    }

    public function buscarEstudiante($id)
    {
        return Estudiantes::find($id);
    }

    public function eliminarEstudiante($id)
    {
        $estudiante = Estudiantes::find($id);
        return $estudiante->delete();
    }

    public function actualizarEstudiante($request, $id)
    {
        return Estudiantes::where("id", $id)->update([
            'nombre' => $request->nombre,
            'curso' => $request->curso,
            'telefono' => $request->telefono,
            'correo' => $request->correo
        ]);
    }

    public function crearEstudiante($request)
    {
        return Estudiantes::create([
            'nombre' => $request->nombre,
            'curso' => $request->curso,
            'telefono' => $request->telefono,
            'correo' => $request->correo
        ]);
    }
}
