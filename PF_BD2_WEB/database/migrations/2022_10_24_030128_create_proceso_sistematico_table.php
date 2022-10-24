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
        Schema::create('proceso_sistematico', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idAtleta');
            $table->unsignedInteger('idTipoAtleta');
            $table->unsignedInteger('idEtapaDeportiva');
            $table->integer('experienciaDeportivaYears');
            $table->integer('experienciaDeportivaMeses');
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
        Schema::dropIfExists('proceso_sistematico');
    }
};
