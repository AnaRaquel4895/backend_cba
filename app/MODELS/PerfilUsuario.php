<?php

namespace App\MODELS;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class PerfilUsuario extends Model
{
    use SoftDeletes;
    
    protected $table = 'perfil_usuario';

    protected $fillable = [
        'nombres',
        'apellido_paterno',
        'apellido_materno',
        'carnet_identidad',
        'celular',
        'user_id',
        'role_id'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public static function getPerfiles($role_id)
    {
        if ($role_id == 0) {
            $results = DB::select('select p.id, p.nombres, p.apellido_paterno, p.apellido_materno, p.carnet_identidad, p.celular, p.user_id, p.deleted_at 
            from perfil_usuario as p, users, model_has_roles
            where users.id = p.user_id AND
            model_has_roles.model_id = users.id AND 
            p.deleted_at IS NULL AND
            model_has_roles.role_id != 4;', []);
            return $results;
        }else {
            $results = DB::select('select p.id, p.nombres, p.apellido_paterno, p.apellido_materno, p.carnet_identidad, p.celular, p.user_id, p.deleted_at 
            from perfil_usuario as p, users, model_has_roles
            where users.id = p.user_id AND
            model_has_roles.model_id = users.id AND 
            p.deleted_at IS NULL AND
            model_has_roles.role_id = :role_id;', ['role_id' => $role_id]);
            return $results;
        }
     
    }
}
