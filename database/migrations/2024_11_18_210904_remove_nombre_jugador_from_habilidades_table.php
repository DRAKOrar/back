<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('habilidades', function (Blueprint $table) {
            $table->dropColumn('nombre_jugador'); // Elimina la columna
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('habilidades', function (Blueprint $table) {
            $table->string('nombre_jugador'); // Vuelve a agregar la columna en caso de rollback
        });
    }
};
