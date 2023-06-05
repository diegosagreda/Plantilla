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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->string('codestudiante')->primary()->unique();
            $table->string('nomestudiante');
            $table->string('edaestudiante');
            $table->date('fechestudiante');
            $table->string('sexestudiante');

            $table->string('ciudad');
            $table->string('barrio');
            $table->string('programa');
            
            $table->foreign('ciudad')->references('codciudad')->on('ciudades')->onDelete('cascade');
            $table->foreign('barrio')->references('codbarrio')->on('barrios')->onDelete('cascade');
            $table->foreign('programa')->references('codprograma')->on('programas')->onDelete('cascade');
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
        Schema::dropIfExists('estudiantes');
    }
};
