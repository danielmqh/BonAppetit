<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario_reserva extends Model
{
    protected $table = "horario_reservas";
    
    protected $fillable = ['mañana', 'tarde', 'noche', 'horario_disponible'];

    public function recerva()
    {
    	return $this->belongsTo('App\Recerva', 'recerva_id');
    }

    public function mesa()
    {
    	return $this->belongsTo('App\Mesa', 'mesa_id');
    }
}
