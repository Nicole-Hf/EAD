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
        Schema::create('infante', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->unsignedSmallInteger('edad');
            $table->string('sexo');
            $table->date('fechaNacimiento');
            $table->string('image')->nullable();
            $table->string('nombreMadre')->nullable();
            $table->string('nombrePadre')->nullable();
            $table->string('telefonoEmergencia')->nullable();
            $table->string('sala')->nullable();
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
        Schema::dropIfExists('infante');
    }
};
