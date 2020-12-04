<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    protected $table = 'proveedor';

    protected $fillable = [
        'name',
        'direccion',
        'nombreContacto',
        'codigoPostal',
        'telefono',
        'rfc',
        'email',
    ];

}
