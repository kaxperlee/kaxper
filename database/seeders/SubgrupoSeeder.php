<?php

namespace Database\Seeders;

use App\Models\Subgrupo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubgrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Grupo 1 - Programacion
        $subgrupo = new Subgrupo();
        $subgrupo->Subgrupo = "Laravel";
        $subgrupo->Descripcion = '';
        $subgrupo->grupo_id = 1;
        $subgrupo->save();

        $subgrupo = new Subgrupo();
        $subgrupo->Subgrupo = "Django";
        $subgrupo->Descripcion = '';
        $subgrupo->grupo_id = 1;
        $subgrupo->save();

        $subgrupo = new Subgrupo();
        $subgrupo->Subgrupo = "Tailwind";
        $subgrupo->Descripcion = '';
        $subgrupo->grupo_id = 1;
        $subgrupo->save();

        $subgrupo = new Subgrupo();
        $subgrupo->Subgrupo = "Bootstrap";
        $subgrupo->Descripcion = '';
        $subgrupo->grupo_id = 1;
        $subgrupo->save();

        //Grupo 2 - Teclado
        $subgrupo = new Subgrupo();
        $subgrupo->Subgrupo = "The Beatles";
        $subgrupo->Descripcion = '';
        $subgrupo->grupo_id = 2;
        $subgrupo->save();

        $subgrupo = new Subgrupo();
        $subgrupo->Subgrupo = "Mecano";
        $subgrupo->Descripcion = '';
        $subgrupo->grupo_id = 2;
        $subgrupo->save();

        $subgrupo = new Subgrupo();
        $subgrupo->Subgrupo = "Coldplay";
        $subgrupo->Descripcion = '';
        $subgrupo->grupo_id = 2;
        $subgrupo->save();

        //Grupo 3 - Biblioteca
        $subgrupo = new Subgrupo();
        $subgrupo->Subgrupo = "Ciencia Ficción";
        $subgrupo->Descripcion = '';
        $subgrupo->grupo_id = 3;
        $subgrupo->save();

        $subgrupo = new Subgrupo();
        $subgrupo->Subgrupo = "Fantasia";
        $subgrupo->Descripcion = '';
        $subgrupo->grupo_id = 3;
        $subgrupo->save();

        $subgrupo = new Subgrupo();
        $subgrupo->Subgrupo = "Terror";
        $subgrupo->Descripcion = '';
        $subgrupo->grupo_id = 3;
        $subgrupo->save();

        $subgrupo = new Subgrupo();
        $subgrupo->Subgrupo = "Autoayuda";
        $subgrupo->Descripcion = '';
        $subgrupo->grupo_id = 3;
        $subgrupo->save();

        //Grupo 4 - enlaces
        $subgrupo = new Subgrupo();
        $subgrupo->Subgrupo = "Peliculas";
        $subgrupo->Descripcion = '';
        $subgrupo->grupo_id = 4;
        $subgrupo->save();

        $subgrupo = new Subgrupo();
        $subgrupo->Subgrupo = "Música";
        $subgrupo->Descripcion = '';
        $subgrupo->grupo_id = 4;
        $subgrupo->save();

        $subgrupo = new Subgrupo();
        $subgrupo->Subgrupo = "Juegos";
        $subgrupo->Descripcion = '';
        $subgrupo->grupo_id = 4;
        $subgrupo->save();

        $subgrupo = new Subgrupo();
        $subgrupo->Subgrupo = "Uned";
        $subgrupo->Descripcion = '';
        $subgrupo->grupo_id = 4;
        $subgrupo->save();

        $subgrupo = new Subgrupo();
        $subgrupo->Subgrupo = "Producción musical";
        $subgrupo->Descripcion = '';
        $subgrupo->grupo_id = 4;
        $subgrupo->save();

        $subgrupo = new Subgrupo();
        $subgrupo->Subgrupo = "Uned";
        $subgrupo->Descripcion = '';
        $subgrupo->grupo_id = 4;
        $subgrupo->save();

        $subgrupo = new Subgrupo();
        $subgrupo->Subgrupo = "Ebooks";
        $subgrupo->Descripcion = '';
        $subgrupo->grupo_id = 4;
        $subgrupo->save();

        $subgrupo = new Subgrupo();
        $subgrupo->Subgrupo = "Emuladores";
        $subgrupo->Descripcion = '';
        $subgrupo->grupo_id = 4;
        $subgrupo->save();
    }
}
