<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';

    protected $fillable = ['nombre', "cproducto_id", "descripcion", "marca", "modelo", "precio", "venta", "cantidad"];

    public function getcProducto()
    {
                            // Modelo de referencia, campo local, campo foráneo 
        return $this->belongsTo('App\Models\cProducto','cproducto_id','id');
    }
    public function getClientes()
    {
                            // Modelo de referencia, campo local, campo foráneo 
        return $this->belongsTo('App\Models\clientes','id_clientes','id');
    }
    public function getProveedor()
    {
                            // Modelo de referencia, campo local, campo foráneo 
        return $this->belongsTo('App\Models\proveedor','id_proveedor','id');
    }
  


}
