<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumo_plato extends Model
{
    protected $table = "insumo_platos";

	public function insumo()
	{
		return $this->belongTo('App\Insumo', 'insumo_id');
	}
	public function plato()
	{
		return $this->belongTo('App\Plato', 'plato_id');
	}
}
