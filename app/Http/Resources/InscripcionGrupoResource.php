<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InscripcionGrupoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'grupo_id' => $this->grupo_id,
            'perfil_usuario_id' => $this->perfil_usuario_id,
            'perfil_usuario' => $this->perfilUsuario
        ];
    }
}
