<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\MODELS\InscripcionGrupo;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;
use App\Http\Resources\InscripcionGrupoResource;


class InscripcionGrupoController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    public function indexByGrupo($grupo_id)
    {
        $inscripcionGrupo = InscripcionGrupo::where('grupo_id', '=', $grupo_id)->get();
        $collection = InscripcionGrupoResource::collection($inscripcionGrupo);
        return $this->sendResponse($collection, 'Lista de Inscritos al grupo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inscripcionGrupo = InscripcionGrupo::create($request->all());
        $resource = new InscripcionGrupoResource($inscripcionGrupo);
        return $this->sendResponse($resource, 'Inscripcion Realizada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MODELS\InscripcionGrupo  $inscripcionGrupo
     * @return \Illuminate\Http\Response
     */
    public function show(InscripcionGrupo $inscripcionGrupo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MODELS\InscripcionGrupo  $inscripcionGrupo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InscripcionGrupo $inscripcionGrupo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MODELS\InscripcionGrupo  $inscripcionGrupo
     * @return \Illuminate\Http\Response
     */
    public function destroy(InscripcionGrupo $inscripcionGrupo)
    {
        $inscripcionGrupo->delete();
        return $this->sendResponse($inscripcionGrupo, 'Inscripcion Eliminada');
    }
}
