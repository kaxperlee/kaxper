<?php

namespace App\View\Components;

use App\Models\Subgrupo;
use Illuminate\View\Component;

class SbProgramacion extends Component
{
    public $subgrupos;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $subgrupos = Subgrupo::where('grupo_id',1)->get();

        $this->subgrupos = $subgrupos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sb-programacion');
    }
}
