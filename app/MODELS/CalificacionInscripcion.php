<?php

namespace App\MODELS;

use Illuminate\Database\Eloquent\Model;

class CalificacionInscripcion extends Model
{
    protected $table = 'calificaciones_inscripciones';

    protected $fillable = [
        'inscripcion_grupo_id',
        'quiz1',
        'quiz2',
        'quiz3',
        'quiz4',
        'comments'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function inscripcionGrupo()
    {
        return $this->belongsTo('App\MODELS\InscripcionGrupo');
    }

}
