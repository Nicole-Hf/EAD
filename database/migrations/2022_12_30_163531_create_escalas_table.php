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
        Schema::create('escalas', function (Blueprint $table) {
            $table->id();
            $table->string('etiqueta');
            $table->unsignedSmallInteger('rangoInicial');
            $table->unsignedSmallInteger('rangoFinal')->nullable();
            $table->unsignedBigInteger('edadId');
            $table->timestamps();

            $table->softDeletes();

            $table->foreign('edadId')->on('edad')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escalas');
    }
};
