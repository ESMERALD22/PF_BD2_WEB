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
        Schema::table('asignacion_atleta', function (Blueprint $table) {
            $table->foreign('idEntrenadorCentroDeportivo')->references('id')->on('entrenador_centro_deportivo')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('asignacion_atleta', function (Blueprint $table) {
            //
        });
    }
};
