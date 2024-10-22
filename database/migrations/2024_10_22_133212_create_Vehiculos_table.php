<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo')->nullable();
            $table->integer('capacidad')->nullable();
            $table->string('estado')->nullable();
            $table->string('mantenimiento')->nullable();
            $table->dateTime('fecha')->nullable();
            $table->string('Alertas')->nullable();
            $table->string('rutas')->nullable();
            $table->string('entregas')->nullable();
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
        Schema::dropIfExists('Vehiculos');
    }
}
