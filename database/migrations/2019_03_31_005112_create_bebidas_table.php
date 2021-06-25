<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBebidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bebidas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_bebida');
            $table->decimal('precio_bebida');

            $table->integer('tipo_bebida_id')->unsigned();

            $table->timestamps();

            $table->foreign('tipo_bebida_id')->references('id')->on('tipo_bebidas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bebidas');
    }
}
