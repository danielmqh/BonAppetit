<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBartenderBebidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bartender_bebidas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('bebida_id')->unsigned();
            $table->integer('trabajador_id')->unsigned();

            $table->timestamps();

            $table->foreign('bebida_id')->references('id')->on('bebidas');
            $table->foreign('trabajador_id')->references('id')->on('trabajadores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bartender_bebidas');
    }
}
