<?php

namespace App\Http\Controllers;

use App\Resources\Estudiantes\Manager;
use Illuminate\Http\Request;
use App\Models\Estudiantes;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class EstudiantesController extends Controller
{

    protected $manager;

    function __construct(){
        $this->manager = new Manager();
    }

    public function index()
    {   
        return view("estudiantes.index")
            ->with("estudiantes", $this->manager->listarRegistros());
    }
    public function create()
    {
        return view("estudiantes.create");
    }

    public function edit($id)
    {
        return view("estudiantes.edit")
            ->with("estudiante", $this->manager->buscarEstudiante($id));
    }

    public function delete($id)
    {
        if($this->manager->eliminarEstudiante($id)){
            Alert::success("El registro fue eliminado exitosamente");
            return redirect()->route("estudiante.index");
        }else{
            Alert::error("El registro no pudo ser eliminado");
            return redirect()->back();
        }
    }
    public function update(Request $request, $id)
    {
        if ($this->manager->actualizarEstudiante($request, $id)) {
            Alert::success("Se actualizo correctamente el registro");
        } else {
            Alert::error("No se pudo actualizar el registro");
        }

        return redirect()->back();
    }

    public function store(Request $request)
    {
        if ($this->manager->crearEstudiante($request)) {
            Alert::success("Se creo exitosamente el estudiante");
        } else {
            Alert::error("No se pudo crear el estudiante el registro");
        }
        return redirect()->back();
    }

}
