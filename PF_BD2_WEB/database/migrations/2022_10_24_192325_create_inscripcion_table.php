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
            $table->decimal('peso');
            $table->decimal('altura');
            $table->unsignedInteger('idEncargado1');
            $table->unsignedInteger('idEncargado2');
            $table->string('fotografia');
            $table->date('fechaInscripcion');
            $table->string('modalidad',50);
            $table->boolean('adaptado');
            $table->string('centroEntrenmiento',100);
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
        Schema::dropIfExists('inscripcion');
    }
};
