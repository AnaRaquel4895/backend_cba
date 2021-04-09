<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\MODELS\Noticia;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;


class NoticiaController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::all();
        return $this->sendResponse($noticias, 'Lista de noticias');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notica = Noticia::create($request->all());
        return $this->sendResponse($notica, 'Noticia creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MODELS\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $noticia)
    {
        return $this->sendResponse($noticia, 'Noticia recuperado');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MODELS\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noticia $noticia)
    {
        $noticia->update($request->all());
        return $this->sendResponse($noticia, 'Noticia editada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MODELS\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticia $noticia)
    {
        //
    }
}
