<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        $hoy = date('Y-m-d');
        $semana =date('w',strtotime($hoy));

        $tareas = Tarea::all();
        return view('agenda.index',compact('tareas'));
    }

    public function indexDay()
    {
        $hoy = date('Y-m-d');
        $semana =date('w',strtotime($hoy));

        $tareas = Tarea::where('Fecha',$hoy)->get();
        return view('agenda.index-day',compact('tareas'));
    }

    public function store(Request $request)
    {

        return $request->all();
    }
}
