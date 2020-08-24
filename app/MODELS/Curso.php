<?php

namespace App\MODELS;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
