s<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cocinero_plato extends Model
{
    protected $table = "cosinero_platos";

    protected $fillable = ['fecha_pedido'];
    
    public function plato()
    {
    	return $this->belongsTo('App\Plato', 'plato_id');
    }

    public function trabajador()
    {
    	return $this->belongsTo('App\Trabajador', 'trabajador_id');
    }
}
