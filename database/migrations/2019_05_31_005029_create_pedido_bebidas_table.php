<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoBebidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_bebidas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cantidad');

            $table->integer('pedido_id')->unsigned();
            $table->integer('bebida_id')->unsigned();

            $table->timestamps();

            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->foreign('bebida_id')->references('id')->on('bebidas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_bebidas');
    }
}
