<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function index()
    {

        $tareas = Tarea::all();
        return view('tarea.index',compact('tarea'));
    }
    public function store(Request $request)
    {
        //return $request->all();
        $tareas = new Tarea();
        $tareas->Tarea = $request->Tarea;
        $tareas->Descripcion = $request->Descripcion;
        $tareas->agenda_tipo_id = $request->agenda_tipo_id;
        $tareas->Tiempoestimado = $request->Tiempoestimado;
        $tareas->Fecha = $request->Fecha;
        $tareas->Dia = intval(date('d',strtotime($tareas->Fecha)));
        $tareas->Mes = intval(date('m',strtotime($tareas->Fecha)));
        $tareas->Ano = intval(date('y',strtotime($tareas->Fecha)));
        $tareas->Semana = intval(date('W',strtotime($tareas->Fecha)));
        $tareas->agenda_destinatario_id = $request->agenda_destinatario_id;
        $tareas->save();

        return redirect()->route('agenda.index', $tareas);

    }
}
