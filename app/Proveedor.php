<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = "proveedores";

    protected $fillable = ['nombre_proveedor', 'direccion_proveedor', 'telefono_proveedor', 'email_proveedor'];
    public function insumo()
    {
    	return $this->hasMany('App\Insumo', 'id_insu');
    }
}
