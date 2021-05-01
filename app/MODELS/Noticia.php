<?php

namespace App\MODELS;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticias';

    protected $fillable = [
        'titulo',
        'descripcion',
        'fecha',
        'link'
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
