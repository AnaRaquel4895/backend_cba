<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use App\MODELS\PerfilUsuario;


class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        DB::table('users')->insert([
            'name' => 'Adiministrador',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);
        */
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Permisos 
        Permission::create(['name' => 'registrar estudiantes']);
        Permission::create(['name' => 'registrar profesores']);
        Permission::create(['name' => 'crear grupos']);
        Permission::create(['name' => 'asignar estudiantes grupo']);
        Permission::create(['name' => 'asignar profesores grupo']);


        Permission::create(['name' => 'ver kardex']);


        Permission::create(['name' => 'registrar notas']);


        // create roles and assign existing permissions
        $roleAdministrativo = Role::create(['name' => 'adminitrativo']);
        $roleAdministrativo->givePermissionTo('registrar estudiantes');
        $roleAdministrativo->givePermissionTo('registrar profesores');
        $roleAdministrativo->givePermissionTo('crear grupos');
        $roleAdministrativo->givePermissionTo('asignar estudiantes grupo');
        $roleAdministrativo->givePermissionTo('asignar profesores grupo');


        $roleEstudiante = Role::create(['name' => 'estudiante']);
        $roleEstudiante->givePermissionTo('ver kardex');


        $roleProfesor = Role::create(['name' => 'profesor']);
        $roleProfesor->givePermissionTo('registrar notas');


        $roleSuperAdmin = Role::create(['name' => 'super-admin']);

        // create demo users
        $superAdmin = Factory(App\User::class)->create([
            'name' => 'Example Super-Admin User',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('superadmin'),
        ]);
        $superAdmin->assignRole($roleSuperAdmin);

        $admin1 = Factory(App\User::class)->create([
            'name' => 'Paola Cespedes',
            'email' => 'p.cespedes@example.com',
            'password' => Hash::make('123456'),
        ]);
        $admin1->assignRole($roleAdministrativo);

        $admin2 = Factory(App\User::class)->create([
            'name' => 'Carla Jimenez',
            'email' => 'c.jimenez@example.com',
            'password' => Hash::make('123456'),
        ]);
        $admin2->assignRole($roleAdministrativo);

        $profesor1 = Factory(App\User::class)->create([
            'name' => 'Julia Rocabado',
            'email' => 'j.rocabado@example.com',
            'password' => Hash::make('123456'),
        ]);
        $profesor1->assignRole($roleProfesor);

        $profesor2 = Factory(App\User::class)->create([
            'name' => 'Vanesa Lopez',
            'email' => 'v.lopez@example.com',
            'password' => Hash::make('123456'),
        ]);
        $profesor2->assignRole($roleProfesor);

        $estudiante1 = Factory(App\User::class)->create([
            'name' => 'Henrry Soria',
            'email' => 'h.soria@example.com',
            'password' => Hash::make('123456'),
        ]);
        $estudiante1->assignRole($roleEstudiante);

        $estudiante2 = Factory(App\User::class)->create([
            'name' => 'Isabel Aban',
            'email' => 'i.aban@example.com',
            'password' => Hash::make('123456'),
        ]);
        $estudiante2->assignRole($roleEstudiante);

        $estudiante3 = Factory(App\User::class)->create([
            'name' => 'Franklin Morales',
            'email' => 'f.morales@example.com',
            'password' => Hash::make('123456'),
        ]);
        $estudiante3->assignRole($roleEstudiante);

        $estudiante4 = Factory(App\User::class)->create([
            'name' => 'Luis Perez',
            'email' => 'l.perez@example.com',
            'password' => Hash::make('123456'),
        ]);
        $estudiante4->assignRole($roleEstudiante);
        /**
         * Creando perfiles para los  estudiantes y docentes.
         */
        $perfilProfesor1 = PerfilUsuario::create([
            'nombres' => 'Julia',
            'apellido_paterno' => 'Rocabado',
            'apellido_materno' => '',
            'carnet_identidad' => '',
            'celular' => '',
            'user_id' => $profesor1->id
        ]);

        $perfilProfesor1 = PerfilUsuario::create([
            'nombres' => 'Vanesa',
            'apellido_paterno' => 'Lopez',
            'apellido_materno' => '',
            'carnet_identidad' => '',
            'celular' => '',
            'user_id' => $profesor2->id
        ]);

        $perfilEstudiante1 = PerfilUsuario::create([
            'nombres' => 'Henrry',
            'apellido_paterno' => 'Soria',
            'apellido_materno' => '',
            'carnet_identidad' => '',
            'celular' => '',
            'user_id' => $estudiante1->id
        ]);

        $perfilEstudiante2 = PerfilUsuario::create([
            'nombres' => 'Isabel',
            'apellido_paterno' => 'Aban',
            'apellido_materno' => '',
            'carnet_identidad' => '',
            'celular' => '',
            'user_id' => $estudiante2->id
        ]);

        $perfilEstudiante3 = PerfilUsuario::create([
            'nombres' => 'Franklin',
            'apellido_paterno' => 'Morales',
            'apellido_materno' => '',
            'carnet_identidad' => '',
            'celular' => '',
            'user_id' => $estudiante3->id
        ]);
    }
}
