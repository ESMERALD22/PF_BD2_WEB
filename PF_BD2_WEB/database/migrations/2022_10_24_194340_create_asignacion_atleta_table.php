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
        Schema::create('asignacion_atleta', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idInscripcion');
            $table->unsignedInteger('idPRT');
            $table->unsignedInteger('idLineaDesarrollo');
            $table->unsignedInteger('idCentroDeportivo');
            $table->unsignedInteger('idFADN');
            $table->unsignedInteger('idEntrenadorCentroDeportivo');
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
        Schema::dropIfExists('asignacion_atleta');
    }
};
