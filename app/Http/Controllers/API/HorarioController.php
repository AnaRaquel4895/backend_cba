<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\MODELS\Horario;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;


class HorarioController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = Horario::all();
        return $this->sendResponse($horarios, 'Lista de horarios');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horarios = Horario::create($request->all());
        return $this->sendResponse($horarios, 'Horario creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MODELS\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function show(Horario $horario)
    {
        return $this->sendResponse($horario, 'Horario recuperado');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MODELS\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horario $horario)
    {
        $horario->update($request->all());
        return $this->sendResponse($horario, 'Horario editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MODELS\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horario $horario)
    {
        //
    }
}
