<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = "cargos";

    protected $fillable = ['nombe_cargo', 'sueldo'];

    public function trabajador()
    {
    	return $this->hasMany('App\Trabajador', 'id_carg');
    }
}
