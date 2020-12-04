<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dcompra extends Model
{
    use HasFactory;

    protected $table = 'dcompra';

    protected $fillable = ['id_compr', 'id_producto', 'cantidad', 'precio',];

    public function getProducto()
    {
                            // Modelo de referencia, campo local, campo foráneo 
        return $this->belongsTo('App\Models\Producto','id_producto','id');
    }

    public function getCompr()
    {
                            // Modelo de referencia, campo local, campo foráneo 
        return $this->belongsTo('App\Models\compr','id_compr','id');
    }
}
