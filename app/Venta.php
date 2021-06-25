<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = "ventas";

    public function pedidos()
    {
    	return $this->belongsTo('App\Pedido', 'id_pedi');
    }
}
