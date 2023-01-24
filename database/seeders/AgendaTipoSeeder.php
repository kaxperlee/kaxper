<?php

namespace Database\Seeders;

use App\Models\AgendaTipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgendaTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agendatipo = new AgendaTipo();
        $agendatipo->Tipo = "Tarea";
        $agendatipo->Descripcion = "";
        $agendatipo->save();

        $agendatipo = new AgendaTipo();
        $agendatipo->Tipo = "Microtarea";
        $agendatipo->Descripcion = "";
        $agendatipo->save();

        $agendatipo = new AgendaTipo();
        $agendatipo->Tipo = "Tarea elefante";
        $agendatipo->Descripcion = "";
        $agendatipo->save();

        $agendatipo = new AgendaTipo();
        $agendatipo->Tipo = "Investigación";
        $agendatipo->Descripcion = "";
        $agendatipo->save();

        $agendatipo = new AgendaTipo();
        $agendatipo->Tipo = "Sin fecha";
        $agendatipo->Descripcion = "";
        $agendatipo->save();
    }
}
