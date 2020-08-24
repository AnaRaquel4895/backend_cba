<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\MODELS\Curso;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;

class CursoController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();
        return $this->sendResponse($cursos, 'Lista de cursos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso = Curso::create($request->all());
        return $this->sendResponse($curso, 'Curso creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MODELS\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        return $this->sendResponse($curso, 'Curso recuperado');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MODELS\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
        $curso->update($request->all());
        return $this->sendResponse($curso, 'Curso editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MODELS\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        //
    }
}
