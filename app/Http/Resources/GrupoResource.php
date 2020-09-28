<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class GrupoResource extends JsonResource
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
            'id' => $this->id,
            'perfil_usuario_id' => $this->perfil_usuario_id,
            'programa_id' => $this->programa_id,
            'curso_id' => $this->curso_id,
            'nivel_id' => $this->nivel_id,
            'horario_id' => $this->horario_id,
            'gestion_id' => $this->gestion_id,
            'numero' => '#',

            'usuario_nombre_completo' => $this->usuarioNombreCompleto,
            'programa_nombre' => $this->programaNombre,
            'curso_nombre' => $this->cursoNombre,
            'nivel_nombre' => $this->nivelNombre,
            'horario_nombre' => $this->horarioNombre,
            'gestion_nombre' => $this->gestionNombre,

        ];
    }
}
