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
        Schema::create('datoshojas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('subtitulo');
            $table->string('documentoid');
            $table->integer('numero_cambio');
            $table->date('fecha');
            $table->string('revision');
            $table->string('meie');
            $table->string('calidad');
            $table->string('manufactura');
            $table->string('area');
            $table->string('linea');
            $table->integer('operacion');
            $table->string('lugar');
            $table->string('planta');
            $table->string('departamento');
            $table->string('pagina');
            $table->string('numeroparte');
            $table->string('mes');
            $table->integer('año');
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
        Schema::dropIfExists('datoshojas');
    }
};
