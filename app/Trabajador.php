<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $table = "trabajadores";

    protected $fillable = ['nombre', 'ap_paterno', 'ap_materno', 'ci', 'genero', 'correo' , 'telefono'];

 	public function cargo()
 	{
 		return $this->belongsTo('App\Cargo', 'cargo_id');
 	}

 	public function turno()
 	{
 		return $this->belongsTo('App\Turno', 'turno_id');
 	}

 	public function pedido()
 	{
 		return $this->hasMany('App\Pedido', 'id_pedi');
 	}

 	public function cocinero_plato()
 	{
 		return $this->hasMany('App\Cosinero_plato', 'id_cosiplato');
 	}

 	public function bartender_bebida()
 	{
 		return $this->hasMany('App\Bartender_bebida', 'id_traba');
 	}
}
