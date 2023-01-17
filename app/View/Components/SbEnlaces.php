<?php

namespace App\View\Components;

use App\Models\LinkEnlace;
use App\Models\LinkGrupo;
use Illuminate\View\Component;

class SbEnlaces extends Component
{

    public $resultados;
    public $selectgrupos;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $resultados = LinkGrupo::all();
        $selectgrupos = LinkGrupo::pluck('Grupo','id');

        $this->resultados = $resultados;
        $this->selectgrupos = $selectgrupos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sb-enlaces');
    }
}
