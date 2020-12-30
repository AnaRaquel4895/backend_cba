<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('auth/register', 'API\UserController@register');
Route::post('auth/login', 'API\UserController@login');
Route::get('roles', 'API\RoleController@index');

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('auth/me', 'API\UserController@me');
});

// Routes for Programas
Route::get('programas', 'API\ProgramaController@index');
Route::post('programas', 'API\ProgramaController@store');
Route::get('programas/{programa}/', 'API\ProgramaController@show');
Route::put('programas/{programa}/', 'API\ProgramaController@update');

// Routes for Cursos
Route::get('cursos', 'API\CursoController@index');
Route::post('cursos', 'API\CursoController@store');
Route::get('cursos/{curso}/', 'API\CursoController@show');
Route::put('cursos/{curso}/', 'API\CursoController@update');

// Routes for Gestiones
Route::get('gestiones', 'API\GestionController@index');
Route::post('gestiones', 'API\GestionController@store');
Route::get('gestiones/{gestion}/', 'API\GestionController@show');
Route::put('gestiones/{gestion}/', 'API\GestionController@update');

// Routes for Horarios
Route::get('horarios', 'API\HorarioController@index');
Route::post('horarios', 'API\HorarioController@store');
Route::get('horarios/{horario}/', 'API\HorarioController@show');
Route::put('horarios/{horario}/', 'API\HorarioController@update');

// Routes for Niveles
Route::get('niveles', 'API\NivelController@index');
Route::post('niveles', 'API\NivelController@store');
Route::get('niveles/{nivel}/', 'API\NivelController@show');
Route::put('niveles/{nivel}/', 'API\NivelController@update');

// Routes for Perfiles Usuarios
Route::post('perfiles-usuarios', 'API\PerfilUsuarioController@store');
Route::get('perfiles-usuarios/by-roles/{role_id}', 'API\PerfilUsuarioController@indexByRoles');
Route::get('perfiles-usuarios/{perfilUsuario}/', 'API\PerfilUsuarioController@show');
Route::put('perfiles-usuarios/{perfilUsuario}/', 'API\PerfilUsuarioController@update');
Route::delete('perfiles-usuarios/{idPerfilUsuario}/', 'API\PerfilUsuarioController@destroy');


// Routes for Grupos
Route::post('grupos', 'API\GrupoController@store');
Route::get('grupos', 'API\GrupoController@index');
Route::get('grupos/{grupo}/', 'API\GrupoController@show');
Route::put('grupos/{grupo}/', 'API\GrupoController@update');


// Routes for InscripcionGrupo
Route::post('inscripciones', 'API\InscripcionGrupoController@store');
Route::get('inscripciones/by-grupo/{grupo_id}', 'API\InscripcionGrupoController@indexByGrupo');
Route::delete('inscripciones/{inscripcionGrupo}', 'API\InscripcionGrupoController@destroy');

// Routes for CalificacionInscripcion
Route::put('calificaciones-inscripciones/{calificacionInscripcion}/', 'API\CalificacionInscripcionController@update');

// Routes for Evento
Route::post('eventos', 'API\EventoController@store');
Route::get('eventos', 'API\EventoController@index');
Route::get('eventos/{evento}/', 'API\EventoController@show');
Route::put('eventos/{evento}/', 'API\EventoController@update');