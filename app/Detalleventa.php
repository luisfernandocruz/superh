<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalleventa extends Model
{
    protected $table = 'detalleventas';

    protected $fillable = [
    	'venta_id', 'factura_id', 'producto_id', 
    ];

    protected $hidden = [
    	'venta_id', 'factura_id', 'producto_id',
    ];

    public function venta()
    {
        return $this->belongsTo('App\Venta');
    }

    public function productos()
    {
        return $this->hasMany('App\Producto');
    }
}
