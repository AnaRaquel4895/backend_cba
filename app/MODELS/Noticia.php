<?php

namespace App\MODELS;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticias';

    protected $fillable = [
        'titulo',
        'descripcion',
        'fecha'
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
