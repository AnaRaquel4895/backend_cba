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

            // create permissions
            Permission::create(['name' => 'edit articles']);
            Permission::create(['name' => 'delete articles']);
            Permission::create(['name' => 'publish articles']);
            Permission::create(['name' => 'unpublish articles']);
    
            // create roles and assign existing permissions
            $role1 = Role::create(['name' => 'writer']);
            $role1->givePermissionTo('edit articles');
            $role1->givePermissionTo('delete articles');
    
            $role2 = Role::create(['name' => 'admin']);
            $role2->givePermissionTo('publish articles');
            $role2->givePermissionTo('unpublish articles');
    
            $role3 = Role::create(['name' => 'super-admin']);
            // create demo users
            $user = Factory(App\User::class)->create([
                'name' => 'Example User',
                'email' => 'test@example.com',
            ]);
            $user->assignRole($role1);

            $user = Factory(App\User::class)->create([
                'name' => 'Example Admin User',
                'email' => 'admin@example.com',
            ]);
            $user->assignRole($role2);

            $user = Factory(App\User::class)->create([
                'name' => 'Example Super-Admin User',
                'email' => 'superadmin@example.com',
                'password' => Hash::make('superadmin'),
            ]);
            $user->assignRole($role3);


    }
}
