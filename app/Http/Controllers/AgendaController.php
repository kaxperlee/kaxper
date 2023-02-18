<?php

namespace App\Http\Controllers;

use App\Models\Fecha;
use App\Models\Tarea;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

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
        $tareas = Tarea::where('Ano',$ano)->where('Mes',$mes)->get();
        //return $tareas;
        
        return view('agenda.index',compact('tareas','sinfechas'));
    }

    public function indexday($fecha=''){

        if($fecha==''){$fecha = date('Y-m-d');}
        
        $tareas = Tarea::whereHas('fecha', function (Builder $query) use($fecha){
            $query->where('fecha', $fecha);
        })->get();

        $sinfechas = Tarea::where('agenda_tipo_id',5)->orWhere('agenda_tipo_id',3)->get();
        return view('agenda.indexDay',compact('tareas','sinfechas'));
    }

    public function indexWeek($fecha = '')
    {
        if($fecha==''){$fecha = date('W');}
        
        //return $dia.'-'.$mes.'-'.$ano;
        $tareas = Tarea::whereHas('fecha', function (Builder $query) use($fecha){
            $query->where('semana', $fecha);
        })->get();
        //return $tareas;
        $sinfechas = Tarea::where('agenda_tipo_id',5)->orWhere('agenda_tipo_id',3)->get();
        return view('agenda.index',compact('tareas','sinfechas'));
    }

    public function semana2($fecha = '')
    {
        $hoy = date('Y-m-d');
        $tareas = Fecha::where('semana',7)->where('ano',2023)->has('tareas')->with('tareas')->get();

        return view('agenda.semana',compact('tareas'));
    }

    public function semana($fecha = '')
    {
        $hoy = date('Y-m-d');
        //$tareas = Fecha::where('semana',7)->where('ano',2023)->has('tareas')->with('tareas')->get();
        $tareas = Tarea::whereHas('fecha', function (Builder $query) {
            $query->where('mes', 2);
        })->get();
    

        return view('agenda.semana',compact('tareas'));
    }

    
    public function indexDay_($fecha = '2023/01/23')
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
