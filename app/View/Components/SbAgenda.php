<?php

namespace App\View\Components;

use App\Models\AgendaDestinatario;
use App\Models\AgendaTipo;
use Illuminate\View\Component;

class SbAgenda extends Component
{
    public $agendadestinatario;
    public $agendatipo;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $agendadestinatario = AgendaDestinatario::pluck('Nombre','id');
        $agendatipo = AgendaTipo::pluck('Tipo','id');

        $this->agendadestinatario = $agendadestinatario;
        $this->agendatipo = $agendatipo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sb-agenda');
    }
}
