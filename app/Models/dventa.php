<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dventa extends Model
{
    use HasFactory;

    protected $table = 'dventa';

    protected $fillable = ['id_venta', 'id_producto', 'cantidad', 'precio',];

    public function getProducto()
    {
                            // Modelo de referencia, campo local, campo foráneo 
        return $this->belongsTo('App\Models\Producto','id_producto','id');
    }

    public function getVenta()
    {
                            // Modelo de referencia, campo local, campo foráneo 
        return $this->belongsTo('App\Models\venta','id_venta','id');
    }
}
