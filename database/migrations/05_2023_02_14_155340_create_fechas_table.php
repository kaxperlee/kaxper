<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fechas', function (Blueprint $table) {
            $table->id();
            //$table->integer('Fechanum');
            $table->date('fecha');
            $table->integer('dia');
            $table->integer('mes');
            $table->string('mesnombre',3);
            $table->integer('ano');
            $table->integer('semana');
            $table->integer('trimestre');
            $table->tinyInteger('diasemana');
            $table->string('formato',20)->nullable();
        });


        // Crea un objeto DateTime para el primer día de 2023
        $date = new DateTime('2023-01-01');

        // Crea un bucle para insertar un registro por día hasta el último día de 2023
        setlocale(LC_TIME, 'es_ES');
        while ($date->format('Y') == 2023) {
            DB ::table('fechas')->insert([
                'id'  => strtotime($date->format('Y-m-d'))/86400,
                'fecha' => $date->format('Y-m-d'),
                'dia' => $date->format('d'),
                'mes' => $date->format('m'),
                'mesnombre' => $date->format('M'),
                'ano' => $date->format('Y'),
                'semana' => $date->format('W'),
                'trimestre' => $this->trimestre($date->format('Y-m-d')),
                'diasemana' => $date->format('N'),

            ]);
            $date->modify('+1 day');
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function trimestre($datetime)
    {
        $mes = date("m",strtotime($datetime));//Referencias: http://stackoverflow.com/a/3768112/1883256
        $mes = is_null($mes) ? date('m') : $mes;
        $trim=floor(($mes-1) / 3)+1;
        return $trim;
    }
    public function down()
    {
        Schema::dropIfExists('fechas');
    }
};
