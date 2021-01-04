<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;
use App\User;
use Illuminate\Support\Facades\Auth;


class UserController extends BaseController
{
    public function register(Request $request)
    {
        $request->merge([
            "password" => bcrypt($request->input("password"))
        ]);
        $user = User::create([
            "name" => $request->input("nombres") . " " . $request->input("apellidopaterno") . " " . $request->input("apellidomaterno"),
            "email" => $request->input("email"),
            "password" => bcrypt($request->input("password"))
        ]);
        // $user = User::create($request->all());
        return $this->sendResponse($user, "Usuario Creado", 201);
    }

    public function login(Request $request)
    {
        // dd($request->all());
        if (Auth::attempt($request->all())) {
            $user = Auth::user();
            // adding comment
            $result = [
                "token" => $user->createToken("myApp")->accessToken,
                "user" => $user->name
            ];
            return $this->sendResponse($result, "Inicio sesion", 200);
        } else {
            return $this->sendError("No authorizado", [], 401);
        }
    }

    public function me()
    {
        $user = Auth::user();
        return $this->sendResponse($user, "Usuario Recuperado", 200);
    }

    public function permissions()
    {
        $user = Auth::user();
        return $this->sendResponse($user->getAllPermissions(), "Lista de permisos", 200);
    }
}
