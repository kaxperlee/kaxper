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
        Schema::create('codigos', function (Blueprint $table) {
            $table->id();
            $table->string("Nombre",40);
            $table->string("Grupo",20);
            $table->string("Subgrupo",20);
            $table->text("Descripcion");
            $table->string("Enlace",200);
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
        Schema::dropIfExists('codigos');
    }
};
