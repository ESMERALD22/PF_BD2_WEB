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
        Schema::create('inscripcion', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idAtleta');
            $table->unsignedInteger('idCategoria');
            $table->integer('peso');
            $table->integer('altura');
            $table->unsignedInteger('idEncargado1');
            $table->unsignedInteger('idEncargado2');
            $table->unsignedInteger('idCentroDeportivo');
            $table->unsignedInteger('idFADN');
            $table->unsignedInteger('idPRT');
            $table->string('fotografia');
            $table->date('fechaInscripcion');
            $table->string('modalidad',50);
            $table->boolean('adaptado');
            $table->string('centroEntrenmiento',100);
            $table->unsignedInteger('idEntrenador');
            $table->unsignedInteger('idLineaDesarrollo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripcion');
    }
};
