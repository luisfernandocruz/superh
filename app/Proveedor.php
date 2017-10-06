<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';

    protected $fillable = [
    	'id', 'nombre',
    ];

    protected $hidden = [
    	'id', 'nombre',
    ];

    public function productos()
    {
        return $this->hasMany('App\Producto');
    }
}
