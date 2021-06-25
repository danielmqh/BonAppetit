<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsumoBebidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumo_bebidas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('bebida_id')->unsigned();
            $table->integer('insumo_id')->unsigned();

            $table->timestamps();

            $table->foreign('bebida_id')->references('id')->on('bebidas');
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
        Schema::dropIfExists('insumo_bebidas');
    }
}
