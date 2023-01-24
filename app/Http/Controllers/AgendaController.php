<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class AgendaController extends Controller
{

    public function index()
    {
        $hoy = date('Y-m-d');
        $sinfechas = Tarea::where('agenda_tipo_id',5)->orWhere('agenda_tipo_id',3)->get();
        $dia = intval(date('d',strtotime($hoy)));
        $mes = intval(date('m',strtotime($hoy)));
        $ano = intval(date('y',strtotime($hoy)));
        $semana = intval(date('W',strtotime($hoy)));
        //return $dia.'-'.$mes.'-'.$ano;
        $tareas = Tarea::where('Ano',$ano)->get();
        //return $tareas;
        return view('agenda.index',compact('tareas','sinfechas'));
    }
    public function indexWeek($fecha = 4)
    {
        $hoy = date('Y-m-d');
        $sinfechas = Tarea::where('agenda_tipo_id',5)->orWhere('agenda_tipo_id',3)->get();
        $dia = intval(date('d',strtotime($hoy)));
        $mes = intval(date('m',strtotime($hoy)));
        $ano = intval(date('y',strtotime($hoy)));
        $semana = intval(date('W',strtotime($hoy)));
        //return $dia.'-'.$mes.'-'.$ano;
        $tareas = Tarea::where('Ano',$ano)->where('Semana',intval($fecha))->get();
        //return $tareas;
        return view('agenda.index',compact('tareas','sinfechas'));
    }

    public function indexDay($fecha = '2023/01/23')
    {
        $hoy = date('Y-m-d');
        $sinfechas = Tarea::where('agenda_tipo_id',5)->orWhere('agenda_tipo_id',3)->get();
        $dia = intval(date('d',strtotime($fecha)));
        $mes = intval(date('m',strtotime($fecha)));
        $ano = intval(date('y',strtotime($fecha)));
        $semana = intval(date('W',strtotime($fecha)));

        $tareas = Tarea::where('Ano',$ano)->where('Dia',$dia)->where('Mes',$mes)->get();
        return view('agenda.index',compact('tareas','sinfechas'));
    }

    public function store(Request $request)
    {

        return $request->all();
    }
}
