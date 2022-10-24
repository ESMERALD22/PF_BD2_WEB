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
        Schema::table('factor_emocional_sensorial', function (Blueprint $table) {
            DB::statement("ALTER TABLE factor_emocional_sensorial MODIFY nombreFactor VARCHAR(50)");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('factor_emocional_sensorial', function (Blueprint $table) {
            //
        });
    }
};
