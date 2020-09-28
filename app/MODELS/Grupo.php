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

    public function perfilUsuario()
    {
        return $this->belongsTo('App\MODELS\PerfilUsuario');
    }

    public function programa()
    {
        return $this->belongsTo('App\MODELS\Programa');
    }

    public function curso()
    {
        return $this->belongsTo('App\MODELS\Curso');
    }

    public function nivel()
    {
        return $this->belongsTo('App\MODELS\Nivel');
    }

    public function horario()
    {
        return $this->belongsTo('App\MODELS\Horario');
    }

    public function gestion()
    {
        return $this->belongsTo('App\MODELS\Gestion');
    }

    public function getUsuarioNombreCompletoAttribute(){
        return trim("{$this->perfilUsuario->nombres} {$this->perfilUsuario->apellido_paterno} {$this->perfilUsuario->apellido_materno}");
    }

    public function getProgramaNombreAttribute()
    {
        return $this->programa->nombre;
    }

    public function getCursoNombreAttribute()
    {
        return $this->curso->nombre;
    }

    public function getNivelNombreAttribute()
    {
        return $this->nivel->nombre;
    }

    public function getHorarioNombreAttribute()
    {
        return $this->horario->nombre;
    }

    public function getGestionNombreAttribute()
    {
        return $this->gestion->nombre;
    }
   
}
