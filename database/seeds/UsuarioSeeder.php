<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;


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
            'name' => 'Edgar Buezo',
            'email' => 'j.rocabado@example.com',
            'password' => Hash::make('123456'),
        ]);
        $profesor1->assignRole($roleProfesor);

        $profesor2 = Factory(App\User::class)->create([
            'name' => 'Viveka Alba',
            'email' => 'v.alba@example.com',
            'password' => Hash::make('123456'),
        ]);
        $profesor2->assignRole($roleProfesor);
        $profesor3 = Factory(App\User::class)->create([
            'name' => 'Fernando Garcia',
            'email' => 'v.lopez@example.com',
            'password' => Hash::make('123456'),
        ]);
        $profesor3->assignRole($roleProfesor);
        $profesor4 = Factory(App\User::class)->create([
            'name' => 'Claudia Chiarella',
            'email' => 'c.chiarella@example.com',
            'password' => Hash::make('123456'),
        ]);
        $profesor4->assignRole($roleProfesor);
        $estudiante1 = Factory(App\User::class)->create([
            'name' => 'Maria Jose Gonzales',
            'email' => 'h.soria@example.com',
            'password' => Hash::make('123456'),
        ]);
        $estudiante1->assignRole($roleEstudiante);
        $estudiante2 = Factory(App\User::class)->create([
            'name' => 'Lucas Ayala',
            'email' => 'l.ayala@example.com',
            'password' => Hash::make('123456'),
        ]);
        $estudiante2->assignRole($roleEstudiante);
        $estudiante3 = Factory(App\User::class)->create([
            'name' => 'Manuel Torrico',
            'email' => 'i.aban@example.com',
            'password' => Hash::make('123456'),
        ]);
        $estudiante3->assignRole($roleEstudiante);

        $estudiante4 = Factory(App\User::class)->create([
            'name' => 'Franklin Morales',
            'email' => 'f.morales@example.com',
            'password' => Hash::make('123456'),
        ]);
        $estudiante4->assignRole($roleEstudiante);
        $estudiante5 = Factory(App\User::class)->create([
            'name' => 'Jhonatan Candia',
            'email' => 'j.candia@example.com',
            'password' => Hash::make('123456'),
        ]);
        $estudiante5->assignRole($roleEstudiante);

        $estudiante6 = Factory(App\User::class)->create([
            'name' => 'Luis Perez',
            'email' => 'l.perez@example.com',
            'password' => Hash::make('123456'),
        ]);
        $estudiante6->assignRole($roleEstudiante);
    }
}
