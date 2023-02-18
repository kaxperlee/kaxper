<?php

namespace App\View\Components;

use App\Models\Fecha;
use Illuminate\View\Component;

class AuxMes extends Component
{
    public $ano;
    public $calendario;
    public $datos;
    public $users;
    public $formato;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($ano)
    {
        if ($ano=="") {$ano = date("Y");}

        $calendario = $this->mesesdelano();
        //$datos['semanas'] = $calendario->groupBy('semana')->get();
        $datos['ano'] = $ano;
        //$datos['formato'] = $calendario->where('fecha',$datos['hoy'])->value('formato');

        $this->calendario = $calendario;
        $this->datos = $datos;
    }

    public static function mesesdelano(){
        $meses = array();

        $nombre_meses = array(
            "Enero",
            "Febrero",
            "Marzo",
            "Abril",
            "Mayo",
            "Junio",
            "Julio",
            "Agosto",
            "Septiembre",
            "Octubre",
            "Noviembre",
            "Diciembre"
        );

        $abreviatura_meses = array(
            "Ene",
            "Feb",
            "Mar",
            "Abr",
            "May",
            "Jun",
            "Jul",
            "Ago",
            "Sep",
            "Oct",
            "Nov",
            "Dic"
        );

        for ($i = 1; $i <= 12; $i++) {
            if($i==date('n')){$formato = "text-dark bg-secondary today";}else{$formato = "";}
            $meses[] = array(
                "numero" => $i,
                "nombre" => $nombre_meses[$i-1],
                "nombrecorto" => $abreviatura_meses[$i-1],
                "formato" => $formato
            );
        }
        return $meses;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.aux-mes');
    }
}
