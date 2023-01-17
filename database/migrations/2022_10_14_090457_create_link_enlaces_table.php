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
        Schema::create('link_enlaces', function (Blueprint $table) {
            $table->id();
            $table->integer('id_link_grupos');
            $table->string('Enlace', 150);
            $table->string('Nombre', 50);
            $table->string('Obs', 400)->nullable();
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
        Schema::dropIfExists('link_enlaces');
    }
};
