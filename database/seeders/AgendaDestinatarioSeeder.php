<?php

namespace Database\Seeders;

use App\Models\AgendaDestinatario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgendaDestinatarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agendadestinatario = new AgendaDestinatario();
        $agendadestinatario->Nombre = "Mati";
        $agendadestinatario->Empresa = "Tlacorp";
        $agendadestinatario->save();

        $agendadestinatario = new AgendaDestinatario();
        $agendadestinatario->Nombre = "Juan Carlos";
        $agendadestinatario->Empresa = "Tlacorp";
        $agendadestinatario->save();

        $agendadestinatario = new AgendaDestinatario();
        $agendadestinatario->Nombre = "Lucia";
        $agendadestinatario->Empresa = "Tlacorp";
        $agendadestinatario->save();

        $agendadestinatario = new AgendaDestinatario();
        $agendadestinatario->Nombre = "Gloria";
        $agendadestinatario->Empresa = "Tlacorp";
        $agendadestinatario->save();

        $agendadestinatario = new AgendaDestinatario();
        $agendadestinatario->Nombre = "María";
        $agendadestinatario->Empresa = "Tlacorp";
        $agendadestinatario->save();

        $agendadestinatario = new AgendaDestinatario();
        $agendadestinatario->Nombre = "Gema";
        $agendadestinatario->Empresa = "";
        $agendadestinatario->save();

        $agendadestinatario = new AgendaDestinatario();
        $agendadestinatario->Nombre = "Lorena";
        $agendadestinatario->Empresa = "Tla Corp";
        $agendadestinatario->save();

        $agendadestinatario = new AgendaDestinatario();
        $agendadestinatario->Nombre = "María José";
        $agendadestinatario->Empresa = "Antonio Martínez";
        $agendadestinatario->save();

        $agendadestinatario = new AgendaDestinatario();
        $agendadestinatario->Nombre = "Angels";
        $agendadestinatario->Empresa = "Tla Corp";
        $agendadestinatario->save();

        $agendadestinatario = new AgendaDestinatario();
        $agendadestinatario->Nombre = "Adeline";
        $agendadestinatario->Empresa = "Tla Consultance";
        $agendadestinatario->save();

        $agendadestinatario = new AgendaDestinatario();
        $agendadestinatario->Nombre = "Suzanne";
        $agendadestinatario->Empresa = "Tla Corp";
        $agendadestinatario->save();

        $agendadestinatario = new AgendaDestinatario();
        $agendadestinatario->Nombre = "Macarena";
        $agendadestinatario->Empresa = "Tla Corp";
        $agendadestinatario->save();

        $agendadestinatario = new AgendaDestinatario();
        $agendadestinatario->Nombre = "Johana";
        $agendadestinatario->Empresa = "Tla Corp";
        $agendadestinatario->save();

        $agendadestinatario = new AgendaDestinatario();
        $agendadestinatario->Nombre = "Ignacio";
        $agendadestinatario->Empresa = "Tla Corp";
        $agendadestinatario->save();

        $agendadestinatario = new AgendaDestinatario();
        $agendadestinatario->Nombre = "Tla Corp";
        $agendadestinatario->Empresa = "Tla Corp";
        $agendadestinatario->save();

        $agendadestinatario = new AgendaDestinatario();
        $agendadestinatario->Nombre = "GaRos";
        $agendadestinatario->Empresa = "GaRos";
        $agendadestinatario->save();

        $agendadestinatario = new AgendaDestinatario();
        $agendadestinatario->Nombre = "Eva";
        $agendadestinatario->Empresa = "Tla Corp";
        $agendadestinatario->save();

        $agendadestinatario = new AgendaDestinatario();
        $agendadestinatario->Nombre = "Nuria";
        $agendadestinatario->Empresa = "Tla Corp";
        $agendadestinatario->save();

        $agendadestinatario = new AgendaDestinatario();
        $agendadestinatario->Nombre = "Aolani";
        $agendadestinatario->Empresa = "Tla Corp";
        $agendadestinatario->save();
    }
}
