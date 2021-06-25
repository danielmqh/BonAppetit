<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_bebida extends Model
{
    protected $table = "tipo_bebidas";

    protected $fillable = ['nombre'];

    public function bebida()
    {
    	return $this->hasMany('App\Bebida', 'id_bebi');
    }
}
