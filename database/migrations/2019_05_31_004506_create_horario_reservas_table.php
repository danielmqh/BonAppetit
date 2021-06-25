<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorarioReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario_reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mañana');
            $table->integer('tarde');
            $table->integer('noche');
            $table->integer('horario_disponible');

            $table->integer('reserva_id')->unsigned();
            $table->integer('mesa_id')->unsigned();

            $table->timestamps();

            $table->foreign('reserva_id')->references('id')->on('reservas');
            $table->foreign('mesa_id')->references('id')->on('mesas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horario_reservas');
    }
}
