<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';

    protected $fillable = [
    	'id', 'usuario_id',
    ];

    protected $hidden = [
    	'id', 'usuario_id',
    ];

    public function usuario()
    {
        return $this->belongsTo('App\User');
    }

    public function factura()
    {
        return $this->hasOne('App\Factura');
    }

    public function detalleventas()
    {
        return $this->hasMany('App\Detalleventa');
    }

}
