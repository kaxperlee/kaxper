<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AgendaDestinatario;
use Illuminate\Database\Seeder;
use App\Models\Codigo;
use App\Models\LinkEnlace;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
Use App\Models\LinkGrupo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(AgendaDestinatarioSeeder::class);

        $codigo = new Codigo();
        $codigo->Nombre = "Laravel web Oficial";
        $codigo->Grupo = "Laravel";
        $codigo->Subgrupo = "Laravel";
        $codigo->Descripcion = "Framework php";
        $codigo->Enlace = "https://laravel.com";
        $codigo->save();


        $codigo = new Codigo();
        $codigo->Nombre = "DJango web oficial";
        $codigo->Grupo = "Python";
        $codigo->Subgrupo = "DJango";
        $codigo->Descripcion = "Framework Python";
        $codigo->Enlace = "https://www.djangoproject.com/";
        $codigo->save();

        $codigo = new Codigo();
        $codigo->Nombre = "Laravel 9 - Tutorial (Codersfree)";
        $codigo->Grupo = "Laravel";
        $codigo->Subgrupo = "Laravel";
        $codigo->Descripcion = "Tutorial de Laravel 9";
        $codigo->Enlace = "https://www.youtube.com/playlist?list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF";
        $codigo->save();

        $codigo = new Codigo();
        $codigo->Nombre = "Tailwind - Tutorial (Codersfree)";
        $codigo->Grupo = "CSS";
        $codigo->Subgrupo = "Tailwind";
        $codigo->Descripcion = "Tutorial de Tailwind";
        $codigo->Enlace = "https://www.youtube.com/playlist?list=PLZ2ovOgdI-kVeYs74jL3kOj-AyoDKCXRy";
        $codigo->save();

        $codigo = new Codigo();
        $codigo->Nombre = "How To Recompile Bootstrap's Sass In VSCode";
        $codigo->Grupo = "CSS";
        $codigo->Subgrupo = "Bootstrap";
        $codigo->Descripcion = "Recompilar Bootstrap Sass en VSCode";
        $codigo->Enlace = "https://www.youtube.com/watch?v=cFjWCTk6lXc";
        $codigo->save();

        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@admin.com";
        $user->password = Hash::make('password');
        $user->save();

        $this->call(GrupoSeeder::class);
        $this->call(SubgrupoSeeder::class);
        $this->call(AgendaDestinatarioSeeder::class);
        $this->call(AgendaTipoSeeder::class);
        $this->call(LinkTipoSeeder::class);
        $this->call(TareaSeeder::class);
        $this->call(LinkSeeder::class);
    }
}
