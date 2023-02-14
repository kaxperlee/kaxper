<?php

namespace Database\Seeders;

use App\Models\LinkTipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinkTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $linktipo = new LinkTipo ();
        $linktipo->Tipo = "Word";
        $linktipo->Descripcion = "documento de Word";
        $linktipo->save();

        $linktipo = new LinkTipo ();
        $linktipo->Tipo = "Pdf";
        $linktipo->Descripcion = "documento Pdf";
        $linktipo->save();

        $linktipo = new LinkTipo ();
        $linktipo->Tipo = "Canal de Youtube";
        $linktipo->Descripcion = "Canal de Youtube";
        $linktipo->save();

        $linktipo = new LinkTipo ();
        $linktipo->Tipo = "Video";
        $linktipo->Descripcion = "Video en cualquier formato";
        $linktipo->save();

        $linktipo = new LinkTipo ();
        $linktipo->Tipo = "Enlace";
        $linktipo->Descripcion = "Enlace a página web";
        $linktipo->save();
    }
}
