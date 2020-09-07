<?php

namespace App\MODELS;

use Illuminate\Database\Eloquent\Model;

class PerfilUsuario extends Model
{
    protected $table = 'perfil_usuario';

    protected $fillable = [
        'nombres',
        'apellido_paterno',
        'apellido_materno',
        'carnet_identidad',
        'celular',
        'user_id'
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
