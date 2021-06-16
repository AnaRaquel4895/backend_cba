<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\MODELS\Grupo;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;
use App\Http\Resources\GrupoResource;

class GrupoController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = Grupo::where('id', '>', 0)->get();
        $collection = GrupoResource::collection($grupos);
        return $this->sendResponse($collection, 'Lista de Grupos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grupo = Grupo::create($request->all());
        return $this->sendResponse($grupo, 'Grupo creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MODELS\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function show(Grupo $grupo)
    {
        return new GrupoResource($grupo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MODELS\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grupo $grupo)
    {
        $grupo->update($request->all());
        return $this->sendResponse($grupo, 'Grupo editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MODELS\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grupo $grupo)
    {
        $grupo->delete();
        return $this->sendResponse($grupo, 'Grupo eliminado');
    }
}
