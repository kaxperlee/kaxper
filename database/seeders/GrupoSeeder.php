<?php

namespace Database\Seeders;

use App\Models\Grupo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grupo = new Grupo();
        $grupo->Grupo = "Programación";
        $grupo->Descripcion = '';
        $grupo->save();

        $grupo = new Grupo();
        $grupo->Grupo = "Teclado";
        $grupo->Descripcion = '';
        $grupo->save();

        $grupo = new Grupo();
        $grupo->Grupo = "Biblioteca";
        $grupo->Descripcion = '';
        $grupo->save();

        $grupo = new Grupo();
        $grupo->Grupo = "Enlaces";
        $grupo->Descripcion = '';
        $grupo->save();

        $grupo = new Grupo();
        $grupo->Grupo = "Agenda";
        $grupo->Descripcion = '';
        $grupo->save();
    }
}
