<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calidad extends Model
{
    use HasFactory;

    protected $fillable = [
        'resolucion',
        'ubicacion',
        'calidad_id'
    ];
}
