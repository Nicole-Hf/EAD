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
        Schema::create('pregunta', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('item');
            $table->string('pregunta');
            $table->unsignedBigInteger('edadId');
            $table->unsignedBigInteger('areaId');
            $table->timestamps();

            $table->softDeletes();

            $table->foreign('edadId')->on('edad')->references('id')->onDelete('cascade');
            $table->foreign('areaId')->on('area')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pregunta');
    }
};
