<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $table = "mesas";

    protected $fillable = ['num_mesa', 'cantidad_cita_mesa', 'descripcion'];

    public function horario_reserva()
    {
    	return $this->hasMany('App\Horario_reserva', 'id_horareser');
    }

    public function pedido()
    {
    	return $this->hasMany('App\Pedido', 'id_pedi');
    }
}
