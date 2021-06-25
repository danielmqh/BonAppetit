<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bebida extends Model
{
    protected $table = "bebidas";

    protected $fillable = ['nombre_bebida', 'precio_bebida'];

    public function tipo_bebida()
    {
    	return $this->belongsTo('App\Tipo_bebida', 'tipo_bebida_id');
    }

    public function pedido_bebida()
    {
    	return $this->hasMany('App\Pedido_bebida', 'id_pedibebi');
    } 

    public function bartende_bebida()
    {
    	return $this->hasMany('App\Bartende_bebida', 'id_bartebebi');
    }

    public function insumo_bebida()
    {
    	return $this->hasMany('App\Insumo_bebida', 'id_bebi');
    }
}
