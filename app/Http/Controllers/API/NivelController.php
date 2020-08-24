<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\MODELS\Nivel;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;


class NivelController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $niveles = Nivel::all();
        return $this->sendResponse($niveles, 'Lista de niveles');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nivel = Nivel::create($request->all());
        return $this->sendResponse($nivel, 'Nivel creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MODELS\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function show(Nivel $nivel)
    {
        return $this->sendResponse($nivel, 'Nivel recuperado');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MODELS\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nivel $nivel)
    {
        $nivel->update($request->all());
        return $this->sendResponse($nivel, 'Nivel editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MODELS\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nivel $nivel)
    {
        //
    }
}
