<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido_bebida extends Model
{
    protected $table = "edido_bebidas";

    protected $fillable = ['cantidad'];

    public function pedido()
    {
    	return $this->belongsTo('App\Pedido', 'pedido_id');
    }

     public function bebida()
     {
     	return $this->belongsTo('App\Bebida', 'bebida_id');
     }
}
