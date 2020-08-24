<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\MODELS\Gestion;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;


class GestionController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gestiones = Gestion::all();
        return $this->sendResponse($gestiones, 'Lista de gestiones');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gestion = Gestion::create($request->all());
        return $this->sendResponse($gestion, 'Gestion creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MODELS\Gestion  $gestion
     * @return \Illuminate\Http\Response
     */
    public function show(Gestion $gestion)
    {
        return $this->sendResponse($gestion, 'Gestion recuperada');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MODELS\Gestion  $gestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gestion $gestion)
    {
        $gestion->update($request->all());
        return $this->sendResponse($gestion, 'Gestion editada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MODELS\Gestion  $gestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gestion $gestion)
    {
        //
    }
}
