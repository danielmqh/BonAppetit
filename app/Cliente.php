<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";

    protected $fillable = ['nombe', 'ap_paterno', 'ap_materno', 'ci', 'telefono'];

    public function pedido()
    {
    	return $this->hasMany('App\Pedido', 'id_pedi');
    }

    public function reserva()
    {
    	return $this->hasMany('App\Reserva', 'id_reser');
    }
}
