<?php

namespace App\MODELS;

use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    protected $table = 'gestiones';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
