<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\MODELS\Evento;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;

class EventoController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::all();
        return $this->sendResponse($eventos, 'Lista de eventos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eventos = Evento::create($request->all());
        return $this->sendResponse($eventos, 'Evento creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MODELS\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        return $this->sendResponse($evento, 'Evento recuperado');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MODELS\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        $evento->update($request->all());
        return $this->sendResponse($evento, 'Evento Editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MODELS\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        //
    }
}
