<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compr extends Model
{
    protected $table = 'compr';

    protected $fillable = [
        'id_proveedor','total',
    ];

    public function getProveedor()
    {
                            // Modelo de referencia, campo local, campo foráneo 
        return $this->belongsTo('App\Models\proveedor','id_proveedor','id');
    }

}
