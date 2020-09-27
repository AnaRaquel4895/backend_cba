<?php

namespace App\MODELS;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupos';

    protected $fillable = [
        'perfil_usuario_id',
        'programa_id',
        'curso_id',
        'nivel_id',
        'horario_id',
        'gestion_id'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function programa()
    {
        return $this->belongsTo('App\MODELS\Programa');
    }


    public function getProgramaDataAttribute()
    {
        return $this->programa->nombre;
    }
}
