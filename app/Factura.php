<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';

    protected $fillable = [
    	'id', 'venta_id', 'total', 
    ];

    protected $hidden = [
    	'id', 'venta_id', 'total', 
    ];

    public function venta()
    {
        return $this->belongsTo('App\Venta');
    }
}
