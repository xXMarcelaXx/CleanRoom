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
        Schema::create('reversos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fechahora');
            $table->string('falla');
            $table->string('proceso');
            $table->string('porque');
            $table->string('confirmacion');
            $table->string('dispocision');
            $table->string('Cantidad');
            $table->string('nombre');
            $table->string('causa');
            $table->string('accion');
            $table->string('responsable');
            $table->timestamps();
            $table->string('turno');
            $table->string('documentoid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reversos');
    }
};
