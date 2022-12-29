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
        Schema::create('resultados', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('resultado');
            $table->unsignedSmallInteger('nroItem');
            $table->unsignedBigInteger('evaluacionId');
            $table->unsignedBigInteger('preguntaId');
            $table->timestamps();

            $table->softDeletes();

            $table->foreign('evaluacionId')->on('evaluacion')->references('id')->onDelete('cascade');
            $table->foreign('preguntaId')->on('pregunta')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultados');
    }
};
