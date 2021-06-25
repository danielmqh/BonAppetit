<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bartender_bebida extends Model
{
    protected $table = "bartender_bebidas";

    public function bebida()
    {
    	return $this->belongsTo('App\Bebida', 'bebida_id');
    }

    public function trabajador()
    {
    	return $this->belongsTo('App\Trabajador', 'trabajador_id');
    }
}
