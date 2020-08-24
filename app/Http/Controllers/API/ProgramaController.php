<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\MODELS\Programa;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;


class ProgramaController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programas = Programa::all();
        return $this->sendResponse($programas, 'Lista de programas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $programa = Programa::create($request->all());
        return $this->sendResponse($programa, 'Programa creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MODELS\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function show(Programa $programa)
    {
        return $this->sendResponse($programa, 'Programa recuperado');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MODELS\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programa $programa)
    {
        $programa->update($request->all());
        return $this->sendResponse($programa, 'Programa editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MODELS\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programa $programa)
    {
        //
    }
}
