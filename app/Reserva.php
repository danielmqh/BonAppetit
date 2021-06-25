<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = "reservas";

    protected $fillable = ['fecha_reserva', 'hora_reserva', 'hora_fin_reserva'];
    
    public function cliente()
    {
    	return $this->belongsTo('App\Cliente', 'cliente_id');
    }

    public function horario_reserva()
    {
    	return $this->hasMany('App\Horario_reserva', `id_horareser`);
    }
}
