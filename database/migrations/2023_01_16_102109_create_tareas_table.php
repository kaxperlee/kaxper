<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();

            $table->string('Tarea',400);
            $table->string('Descripcion',1000)->nullable();
            $table->unsignedBigInteger('agenda_tipo_id')->nullable();
            $table->unsignedBigInteger('agenda_destinatario_id')->nullable();

            $table->foreign('agenda_tipo_id')
                ->references('id')
                ->on('agenda_tipos')
                ->onDelete('set null');
            $table->foreign('agenda_destinatario_id')->references('id')->on('agenda_destinatarios')->onDelete('set null');
            $table->Integer('Tiempo')->nullable();
            $table->Integer('Tiempoestimado')->nullable();
            $table->date('Fecha', $precision = 0)->nullable();
            $table->tinyInteger('Semana')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tareas');
    }
};
