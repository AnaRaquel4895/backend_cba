<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\MODELS\CalificacionInscripcion;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;
use App\Http\Resources\CalificacionInscripcionResource;

class CalificacionInscripcionController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calificaciones = CalificacionInscripcion::all();
        $collection = CalificacionInscripcionResource::collection($calificaciones);
        return $this->sendResponse($collection, 'Lista de calificaciones');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MODELS\CalificacionInscripcion  $calificacionInscripcion
     * @return \Illuminate\Http\Response
     */
    public function show(CalificacionInscripcion $calificacionInscripcion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MODELS\CalificacionInscripcion  $calificacionInscripcion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CalificacionInscripcion $calificacionInscripcion)
    {
        $calificacionInscripcion->update($request->all());
        return $this->sendResponse($calificacionInscripcion, 'Notas editadas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MODELS\CalificacionInscripcion  $calificacionInscripcion
     * @return \Illuminate\Http\Response
     */
    public function destroy(CalificacionInscripcion $calificacionInscripcion)
    {
        //
    }
}
