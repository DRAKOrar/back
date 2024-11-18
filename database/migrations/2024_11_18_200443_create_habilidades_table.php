<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('habilidades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('student')->onDelete('cascade');

            $table->integer('fuerza');
            $table->integer('estamina');
            $table->integer('balance');
            $table->integer('resistencia');
            $table->integer('conocimiento');
            $table->integer('destreza');
            $table->integer('f_voluntad');
            $table->integer('carisma');
            $table->integer('construccion');
            $table->integer('musculatura');
            $table->integer('punteria');
            $table->integer('inteligencia');
            $table->integer('salud');
            $table->integer('logica');
            $table->integer('sabiduria');
            $table->integer('intuicion');
            $table->integer('verborrea');
            $table->integer('apariencia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habilidades');
    }
};
