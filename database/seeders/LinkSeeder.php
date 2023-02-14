<?php

namespace Database\Seeders;

use App\Models\Link;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $linktipo = new Link ();
        $linktipo->Titulo = "Laravel web Oficial";
        $linktipo->Descripcion = "Página oficial de Laravel";
        $linktipo->Grupo = "Programación";
        $linktipo->Subgrupo = "Laravel";
        $linktipo->link_tipo_id = 5;
        $linktipo->Enlace = "https://laravel.com";
        $linktipo->save();

        $linktipo = new Link ();
        $linktipo->Titulo = "DJango web oficial";
        $linktipo->Descripcion = "Framework Python";
        $linktipo->Grupo = "Programación";
        $linktipo->Subgrupo = "DJango";
        $linktipo->link_tipo_id = 5;
        $linktipo->Enlace = "https://www.djangoproject.com/";
        $linktipo->save();

        $linktipo = new Link ();
        $linktipo->Titulo = "Laravel 9 - Tutorial (Codersfree)";
        $linktipo->Descripcion = "Tutorial de Laravel 9";
        $linktipo->Grupo = "Programación";
        $linktipo->Subgrupo = "Laravel";
        $linktipo->link_tipo_id = 3;
        $linktipo->Enlace = "https://www.youtube.com/playlist?list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF";
        $linktipo->save();

        $linktipo = new Link ();
        $linktipo->Titulo = "Tailwind - Tutorial (Codersfree)";
        $linktipo->Descripcion = "Tutorial de Tailwind";
        $linktipo->Grupo = "Programación";
        $linktipo->Subgrupo = "Tailwind";
        $linktipo->link_tipo_id = 3;
        $linktipo->Enlace = "https://www.youtube.com/playlist?list=PLZ2ovOgdI-kVeYs74jL3kOj-AyoDKCXRy";
        $linktipo->save();

        $linktipo = new Link ();
        $linktipo->Titulo = "How To Recompile Bootstrap's Sass In VSC";
        $linktipo->Descripcion = "Recompilar Bootstrap Sass en VSCode";
        $linktipo->Grupo = "Programación";
        $linktipo->Subgrupo = "Bootstrap";
        $linktipo->link_tipo_id = 5;
        $linktipo->Enlace = "https://www.youtube.com/watch?v=cFjWCTk6lXc";
        $linktipo->save();

        $linktipo = new Link ();
        $linktipo->Titulo = "Let it be";
        $linktipo->Descripcion = "The Beatles";
        $linktipo->Grupo = "Teclado";
        $linktipo->Subgrupo = "The Beatles";
        $linktipo->link_tipo_id = 4;
        $linktipo->Enlace = "Let it be - The Beatles.mp4";
        $linktipo->save();

        $linktipo = new Link ();
        $linktipo->Titulo = "Me cuesta tanto olvidarte";
        $linktipo->Descripcion = "Mecano";
        $linktipo->Grupo = "Teclado";
        $linktipo->Subgrupo = "Mecano";
        $linktipo->link_tipo_id = 4;
        $linktipo->Enlace = "Me cuesta tanto olvidarte - Mecano.mp4";
        $linktipo->save();

        $linktipo = new Link ();
        $linktipo->Titulo = "Hijo de la Luna";
        $linktipo->Descripcion = "Mecano";
        $linktipo->Grupo = "Teclado";
        $linktipo->Subgrupo = "Mecano";
        $linktipo->link_tipo_id = 4;
        $linktipo->Enlace = "Hijo de la Luna - Mecano.mp4";
        $linktipo->save();

        $linktipo = new Link ();
        $linktipo->Titulo = "Mujer contra mujer";
        $linktipo->Descripcion = "Mecano";
        $linktipo->Grupo = "Teclado";
        $linktipo->Subgrupo = "Mecano";
        $linktipo->link_tipo_id = 4;
        $linktipo->Enlace = "Mujer contra mujer - Mecano.mp4";
        $linktipo->save();

        $linktipo = new Link ();
        $linktipo->Titulo = "El 7 de septiembre";
        $linktipo->Descripcion = "Mecano";
        $linktipo->Grupo = "Teclado";
        $linktipo->Subgrupo = "Mecano";
        $linktipo->link_tipo_id = 4;
        $linktipo->Enlace = "El 7 de septiembre - Mecano.mp4";
        $linktipo->save();

        $linktipo = new Link ();
        $linktipo->Titulo = "The scientist";
        $linktipo->Descripcion = "Coldplay";
        $linktipo->Grupo = "Teclado";
        $linktipo->Subgrupo = "Coldplay";
        $linktipo->link_tipo_id = 4;
        $linktipo->Enlace = "The scientist - Coldplay.mp4";
        $linktipo->save();


    }
}
