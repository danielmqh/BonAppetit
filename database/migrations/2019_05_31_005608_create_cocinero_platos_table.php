<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCocineroPlatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cocinero_platos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('plato_id')->unsigned();
            $table->integer('trabajador_id')->unsigned();

            $table->timestamps();

            $table->foreign('plato_id')->references('id')->on('platos');
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
        Schema::dropIfExists('cocinero_platos');
    }
}
