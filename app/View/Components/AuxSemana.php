<?php

namespace App\View\Components;

use App\Models\Fecha;
use Illuminate\View\Component;

class AuxSemana extends Component
{
    public $mes;
    public $ano;
    public $calendario;
    public $datos;
    public $users;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($mes,$ano)
    {
        if ($mes=="" or $ano=="") {$dia = $mes = date("n"); $ano = date("Y");}

        $calendario = Fecha::where('mes',$mes)->where('ano',$ano)->groupBy('semana')->get();

        $datos['numerosemanas'] = $calendario->groupBy('semana')->count();
        //$datos['semanas'] = $calendario->groupBy('semana')->get();
        $datos['mes'] = $mes;
        $datos['mesesp'] = $this->spanish_month($mes);
        $datos['ano'] = $ano;
        $datos['semanahoy'] = date('W');
        
        //$users = User::all();
        $calendario = $calendario->map(function ($cal) {
            if ($cal->semana == date('W')) { // Cambiar el valor del campo "name" del usuario con id = 1
                $cal->formato = 'text-dark bg-secondary today';
            }
            return $cal;
        });

        //$datos['formato'] = $calendario->where('fecha',$datos['hoy'])->value('formato');

        $this->calendario = $calendario;
        $this->datos = $datos;
    }

    public static function spanish_month($mes)
    {
        $mesesp = $mes;
        if ($mes==1) {
          $mesesp = "Enero";
        }
        elseif ($mes==2)  {
          $mesesp = "Febrero";
        }
        elseif ($mes==3)  {
          $mesesp = "Marzo";
        }
        elseif ($mes==4) {
          $mesesp = "Abril";
        }
        elseif ($mes==5) {
          $mesesp = "Mayo";
        }
        elseif ($mes==6) {
          $mesesp = "Junio";
        }
        elseif ($mes==7) {
          $mesesp = "Julio";
        }
        elseif ($mes==8) {
          $mesesp = "Agosto";
        }
        elseif ($mes==9) {
          $mesesp = "Septiembre";
        }
        elseif ($mes==10) {
          $mesesp = "Octubre";
        }
        elseif ($mes==11) {
          $mesesp = "Noviembre";
        }
        elseif ($mes==12) {
          $mesesp = "Diciembre";
        }
        else {
          $mesesp = $mes;
        }
        return $mesesp;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.aux-semana');
    }
}
