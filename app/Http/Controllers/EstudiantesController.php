<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiantes;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class EstudiantesController extends Controller
{

    public function index()
    {
        $estudiantes = Estudiantes::all(); // select * from estudiantes
        return view("estudiantes.index")
            ->with("estudiantes", $estudiantes);
    }
    public function create()
    {
        return view("estudiantes.create");
    }

    public function edit($id)
    {
        $estudiante = Estudiantes::find($id);
        return view("estudiantes.edit")
            ->with("estudiante", $estudiante);
    }

    public function delete($id)
    {
        $estudiante = Estudiantes::find($id);
        $estudiante->delete();
        Alert::success("El registro fue eliminado exitosamente");
        return redirect()->route("estudiante.index");
    }
    public function update(Request $request, $id)
    {
        $estudiante = Estudiantes::where("id", $id)->update([
            'nombre' => $request->nombre,
            'curso' => $request->curso,
            'telefono' => $request->telefono,
            'correo' => $request->correo
        ]);

        if ($estudiante == true) {
            Alert::success("Se actualizo correctamente el registro");
            return redirect()->back();
        } else {
            dd("No se pudo actualizar");
        }
    }

    public function store(Request $request)
    {
        $estudiante = DB::table('estudiantes')->insert([
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
