<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mensaje extends Model
{
    protected $table = 'mensaje';

    protected $fillable = [
        'name',
        'asunto',
        'mensaje',
        'email',
        'status',
        'problema',
    ];

}