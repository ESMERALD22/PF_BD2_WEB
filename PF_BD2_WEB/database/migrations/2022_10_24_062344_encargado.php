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
        //
        Schema::create('encargado', function (Blueprint $table) {
            $table->increments('idencargado');
            $table->integer('cui');
            $table->string('nombre1',100);
            $table->string('nombre2',100);
            $table->string('apellido1',50);
            $table->string('apellido2',50);
            $table->string('apellidoDeCasada',50);
            $table->date('fechaNaciemiento',50);
            $table->integer('telefonodecasa');
            $table->integer('celular');
            $table->string('genero',50);
            
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
        //
        Schema::dropIfExists('encargado');

    }
};
