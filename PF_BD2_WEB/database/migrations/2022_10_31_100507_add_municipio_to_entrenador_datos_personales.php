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
        Schema::table('entrenador_datos_personales', function (Blueprint $table) {
            $table->unsignedInteger("idMunicipio");
            $table->foreign('idMunicipio')->references('id')->on('municipio')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('entrenador_datos_personales', function (Blueprint $table) {
            //
        });
    }
};
