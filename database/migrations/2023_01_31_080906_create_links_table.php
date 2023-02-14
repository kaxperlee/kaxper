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
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->string('Titulo',300);
            $table->string('Descripcion', 500);
            $table->string('Grupo', 150);
            $table->string('Subgrupo', 150)->nullable();
            $table->unsignedBigInteger('link_tipo_id')->nullable();

            $table->foreign('link_tipo_id')
                ->references('id')
                ->on('link_tipos')
                ->onDelete('set null');

            $table->string('Enlace', 500);
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
        Schema::dropIfExists('links');
    }
};
