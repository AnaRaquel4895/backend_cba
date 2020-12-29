<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\MODELS\PerfilUsuario;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\API\BaseController;
use Spatie\Permission\Models\Role;


class PerfilUsuarioController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    public function indexByRoles($role_id)
    {
        $perfiles = PerfilUsuario::getPerfiles($role_id);
        return $this->sendResponse( $perfiles, 'Lista de perfiles recuperados');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge([
            "password" => bcrypt($request->input("password"))
        ]);
        $user = User::create([
            "name" => $request->input("nombres") . " " . $request->input("apellido_paterno") . " " . $request->input("apellido_materno"),
            "email" => $request->input("email"),
            "password" => $request->input("password")
        ]);

        $perfil = PerfilUsuario::create([
            'nombres' => $request->input("nombres"),
            'apellido_paterno' => $request->input("apellido_paterno"),
            'apellido_materno' => $request->input("apellido_materno"),
            'carnet_identidad' => $request->input("carnet_identidad"),
            'celular' => $request->input("celular"),
            'user_id' => $user->id
        ]);

        $role = Role::find($request->input("role_id"));
        $user->assignRole($role);

        return $this->sendResponse($perfil, 'Cuenta y perfil creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MODELS\PerfilUsuario  $perfilUsuario
     * @return \Illuminate\Http\Response
     */
    public function show(PerfilUsuario $perfilUsuario)
    {
        return $this->sendResponse($perfilUsuario, 'Perfil recuperado');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MODELS\PerfilUsuario  $perfilUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PerfilUsuario $perfilUsuario)
    {
        $perfilUsuario->update($request->all());
        return $this->sendResponse($perfilUsuario, 'Perfil editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MODELS\PerfilUsuario  $perfilUsuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($idPerfilUsuario)
    {
        $perfilUsuario = PerfilUsuario::withTrashed()->where('id' , $idPerfilUsuario)->first();
        // dd($perfilUsuario);
        // $perfilUsuario->restore();
        $perfilUsuario->delete();
        return $this->sendResponse($perfilUsuario, 'Perfil eliminado');
    }
}
