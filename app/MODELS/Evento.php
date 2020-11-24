<?php

namespace App\MODELS;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventos';

    protected $fillable = [
        'title',
        'color',
        'start',
        'end'
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
