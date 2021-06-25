<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido_plato extends Model
{
    protected $table = "pedido_platos";

    protected $fillable = ['cantidad'];

    public function pedido()
    {
    	return $this->belongsTo('App\Pedido', 'pedido_id');
    }

    public function plato()
    {
    	return $this->belongsTo('App\Plato', 'plato_id');
    }
}
