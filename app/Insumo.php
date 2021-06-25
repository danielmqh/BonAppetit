<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
	protected $table = "insumos";

	protected $fillable = ['nombre_insumo', 'cantidad_insumo'];

	public function insumo_bebida()
	{
		return $this->hasMany('App\Insumo_bebida', 'id_insubebi');
	}

	public function insumo_plato()
	{
		return $this->hasMany('App\Insumo_plato', 'id_insuplato');
	}

	public function proveedor()
	{
		return $this->belongTo('App\Proveedor', 'proveedor_id');
	}
}
