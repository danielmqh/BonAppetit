<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsumoPlatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumo_platos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('plato_id')->unsigned();
            $table->integer('insumo_id')->unsigned();

            $table->timestamps();

            $table->foreign('plato_id')->references('id')->on('platos');
            $table->foreign('insumo_id')->references('id')->on('insumos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insumo_platos');
    }
}
