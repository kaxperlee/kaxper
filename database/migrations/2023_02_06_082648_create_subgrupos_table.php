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
        Schema::create('subgrupos', function (Blueprint $table) {
            $table->id();
            $table->string('Subgrupo',50);
            $table->string('Descripcion',400);

            $table->unsignedBigInteger('grupo_id')->nullable();

            $table->foreign('grupo_id')
            ->references('id')
            ->on('grupos')
            ->onDelete('set null');

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
        Schema::dropIfExists('subgrupos');
    }
};
