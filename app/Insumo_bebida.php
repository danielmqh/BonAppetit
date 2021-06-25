<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumo_bebida extends Model
{
    protected $table = "insumo_bebidas";

	public function bebida()
	{
		return $this->belongTo('App\Bebida', 'bebida_id');
	}

	public function insumo()
	{
		return $this->belongTo('App\Insumo', 'insum_id');
	}
}
