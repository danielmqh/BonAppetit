<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = "pedidos";

    protected $fillable = ['fecha_pedido'];

    public function pedido_plato()
    {
    	return $this->hasMany('App\Pedido_plato', 'id_pediplato');
    }

    public function pedido_bebida()
    {
    	return $this->hasMany('App\Pedido_bebida', 'id_pedibebida');
    }

    public function venta()
    {
    	return $this->hasMany('App\Venta', 'id_vent');
    }

    public function cliente()
    {
    	return $this->belongsTo('App\Cliente', 'cliente_id');
    }

    public function mesa()
    {
    	return $this->belongsTo('App\Mesa', 'mesa_id');
    }

    public function trabajador()
    {
    	return $this->belongsTo('App\Trabajador', 'trabajador_id');
    }
}
