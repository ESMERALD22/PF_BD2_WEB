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
        Schema::table('centro_deportivo', function (Blueprint $table) {
            $table->unsignedInteger("idMunicipio");
            $table->foreign('idMunicipio')->references('id')->on('municipio')->onDelete('cascade');
            $table->string("espacioFisico");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('centro_deportivo', function (Blueprint $table) {
            //
        });
    }
};
