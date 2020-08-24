<?php

namespace App\MODELS;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $table = 'programas';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
