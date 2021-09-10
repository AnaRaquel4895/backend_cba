<?php

namespace App\MODELS;

use Illuminate\Database\Eloquent\Model;

class InscripcionGrupo extends Model
{
    protected $table = 'inscripcion_grupo';

    protected $fillable = [
        'grupo_id',
        'perfil_usuario_id'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function perfilUsuario()
    {
        return $this->belongsTo('App\MODELS\PerfilUsuario');
    }

    public function grupo()
    {
        return $this->belongsTo('App\MODELS\Grupo');
        //  return $this->hasOne(Phone::class);
    }


    public function calificacionInscripcion()
    {
        return $this->hasOne('App\MODELS\CalificacionInscripcion');
    }
}
