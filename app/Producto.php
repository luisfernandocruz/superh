<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = [
    	'nombre', 'precio', 'cantidad', 'proveedor_id', 'categoria_id',
    ];

    protected $hidden = [
    	'nombre', 'precio', 'cantidad', 'proveedor_id', 'categoria_id',
    ];

    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }

    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor');
    }

    public function detalleventa()
    {
        return $this->belongsTo('App\Detalleventa');
    }

}
