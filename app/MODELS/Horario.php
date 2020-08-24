<?php

namespace App\MODELS;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'niveles';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
