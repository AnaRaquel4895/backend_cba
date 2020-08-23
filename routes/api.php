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

Route::group(['middleware'=>'auth:api'],function(){
    Route::get('auth/me', 'API\UserController@me');
    
});

// Routes for Programas
Route::get('programas', 'API\ProgramaController@index');
Route::post('programas', 'API\ProgramaController@store');
Route::get('programas/{programa}/', 'API\ProgramaController@show');
Route::put('programas/{programa}/', 'API\ProgramaController@update');