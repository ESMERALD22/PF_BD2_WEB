<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
            DB::statement("ALTER TABLE entrenador_datos_personales MODIFY cui BIGINT");
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
