<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class CalificacionInscripcionResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'quiz1' => $this->quiz1,
            'quiz2' => $this->quiz2,
            'quiz3' => $this->quiz3,
            'quiz4' => $this->quiz4,
            'comments' => $this->comments,
            'periodo' => $this->inscripcionGrupo->grupo->periodo,
            'gestion' => $this->inscripcionGrupo->grupo->gestion->nombre,
            'curso' => $this->inscripcionGrupo->grupo->curso->nombre,
            'nivel' => $this->inscripcionGrupo->grupo->nivel->nombre,
            'horario' => $this->inscripcionGrupo->grupo->horario->nombre,
            'perfil_id' => $this->inscripcionGrupo->perfilUsuario->id
        ];
    }
}
