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

        /**>>>>>>>>>>> PERMISIONS <<<<<<<<<<<<<< */
        Permission::create(['name' => 'can_view_home']);
        /*Permisos de usuarios*/
        Permission::create(['name' => 'can_list_usuarios']);
        Permission::create(['name' => 'can_edit_usuarios']);
        Permission::create(['name' => 'can_delete_usuarios']);
        Permission::create(['name' => 'can_create_usuarios']);

        /*Permisos de grupos*/
        Permission::create(['name' => 'can_read_usuarios']); 
        Permission::create(['name' => 'can_list_grupos']);
        Permission::create(['name' => 'can_edit_grupos']);
        Permission::create(['name' => 'can_delete_grupos']);
        Permission::create(['name' => 'can_create_grupos']);
        Permission::create(['name' => 'can_add_student_grupos']);
        Permission::create(['name' => 'can_read_grupos']);
        Permission::create(['name' => 'can_filter_grupos']);
        /*Permisos de calificaciones*/
        Permission::create(['name' => 'can_add_grades_calificaciones']);
        Permission::create(['name' => 'can_edit_calificaciones']);
        Permission::create(['name' => 'can_read_calificaciones']);
        

        /*Permisos de calendario*/
        Permission::create(['name' => 'can_read_events_calendario']);

        /*Permisos de programas*/
        Permission::create(['name' => 'can_read_programas']); 
        Permission::create(['name' => 'can_list_programas']);
        Permission::create(['name' => 'can_edit_programas']);
        Permission::create(['name' => 'can_delete_programas']);
        Permission::create(['name' => 'can_create_programas']);

        /*Permisos de cursos*/
        Permission::create(['name' => 'can_read_cursos']); 
        Permission::create(['name' => 'can_list_cursos']);
        Permission::create(['name' => 'can_edit_cursos']);
        Permission::create(['name' => 'can_delete_cursos']);
        Permission::create(['name' => 'can_create_cursos']);

        /*Permisos de niveles*/
        Permission::create(['name' => 'can_read_niveles']); 
        Permission::create(['name' => 'can_list_niveles']);
        Permission::create(['name' => 'can_edit_niveles']);
        Permission::create(['name' => 'can_delete_niveles']);
        Permission::create(['name' => 'can_create_niveles']);

        /*Permisos de horarios*/
        Permission::create(['name' => 'can_read_horarios']); 
        Permission::create(['name' => 'can_list_horarios']);
        Permission::create(['name' => 'can_edit_horarios']);
        Permission::create(['name' => 'can_delete_horarios']);
        Permission::create(['name' => 'can_create_horarios']);

        /*Permisos de gestiones*/
        Permission::create(['name' => 'can_read_gestiones']); 
        Permission::create(['name' => 'can_list_gestiones']);
        Permission::create(['name' => 'can_edit_gestiones']);
        Permission::create(['name' => 'can_delete_gestiones']);
        Permission::create(['name' => 'can_create_gestiones']);

        /*Permisos de eventos*/
        Permission::create(['name' => 'can_read_eventos']); 
        Permission::create(['name' => 'can_list_eventos']);
        Permission::create(['name' => 'can_edit_eventos']);
        Permission::create(['name' => 'can_delete_eventos']);
        Permission::create(['name' => 'can_create_eventos']);

        /*Permisos de noticias*/
        Permission::create(['name' => 'can_read_noticias']); 
        Permission::create(['name' => 'can_list_noticias']);
        Permission::create(['name' => 'can_edit_noticias']);
        Permission::create(['name' => 'can_delete_noticias']);
        Permission::create(['name' => 'can_create_noticias']);
       /**>>>>>>>>>>> END PERMISIONS <<<<<<<<<<<<<< */


        

        /**>>>>>>>>>>> ROLE CREATION <<<<<<<<<<<<<< */
        // Create roles and assign existing permissions
        // ROLE ADMINISTRATIVOS
        $roleAdministrativo = Role::create(['name' => 'adminitrativo']);
        // Permission::create(['name' => 'USUARIOS.REGISTRAR']);
        // $roleAdministrativo->givePermissionTo('USUARIOS.REGISTRAR');

        //ROLE ESTUDIANTES
        $roleEstudiante = Role::create(['name' => 'estudiante']);
        // Permission::create(['name' => 'KARDEX.VER']);
        // $roleEstudiante->givePermissionTo('KARDEX.VER');

        // ROLE PROFESOR
        $roleProfesor = Role::create(['name' => 'profesor']);
        // Permission::create(['name' => 'NOTAS.REGISTRAR']);
        // $roleProfesor->givePermissionTo('NOTAS.REGISTRAR');

        // ROLE SUPERADMIN
        $roleSuperAdmin = Role::create(['name' => 'super-admin']);
        /**>>>>>>>>>>> END ROLE CREATION <<<<<<<<<<<<<< */

        /**>>>>>>>>>>> PERMISSION ASSIGNMENT <<<<<<<<<<<<<< */
        // ADMINISTRATIVO
        $roleAdministrativo->givePermissionTo('can_view_home');
        $roleAdministrativo->givePermissionTo('can_read_usuarios'); 
        $roleAdministrativo->givePermissionTo('can_list_usuarios');
        $roleAdministrativo->givePermissionTo('can_edit_usuarios');
        $roleAdministrativo->givePermissionTo('can_delete_usuarios');
        $roleAdministrativo->givePermissionTo('can_create_usuarios');
        $roleAdministrativo->givePermissionTo('can_read_grupos'); 
        $roleAdministrativo->givePermissionTo('can_list_grupos');
        $roleAdministrativo->givePermissionTo('can_edit_grupos');
        $roleAdministrativo->givePermissionTo('can_delete_grupos');
        $roleAdministrativo->givePermissionTo('can_create_grupos');
        $roleAdministrativo->givePermissionTo('can_add_student_grupos');
        $roleAdministrativo->givePermissionTo('can_filter_grupos');
        $roleAdministrativo->givePermissionTo('can_read_calificaciones');
        $roleAdministrativo->givePermissionTo('can_read_events_calendario');
        $roleAdministrativo->givePermissionTo('can_read_programas'); 
        $roleAdministrativo->givePermissionTo('can_list_programas');
        $roleAdministrativo->givePermissionTo('can_edit_programas');
        // $roleAdministrativo->givePermissionTo('can_delete_programas');
        $roleAdministrativo->givePermissionTo('can_create_programas');
        $roleAdministrativo->givePermissionTo('can_read_cursos'); 
        $roleAdministrativo->givePermissionTo('can_list_cursos');
        $roleAdministrativo->givePermissionTo('can_edit_cursos');
        // $roleAdministrativo->givePermissionTo('can_delete_cursos');
        $roleAdministrativo->givePermissionTo('can_create_cursos');
        $roleAdministrativo->givePermissionTo('can_read_niveles'); 
        $roleAdministrativo->givePermissionTo('can_list_niveles');
        $roleAdministrativo->givePermissionTo('can_edit_niveles');
        // $roleAdministrativo->givePermissionTo('can_delete_niveles');
        $roleAdministrativo->givePermissionTo('can_create_niveles');
        $roleAdministrativo->givePermissionTo('can_read_horarios'); 
        $roleAdministrativo->givePermissionTo('can_list_horarios');
        $roleAdministrativo->givePermissionTo('can_edit_horarios');
        // $roleAdministrativo->givePermissionTo('can_delete_horarios');
        $roleAdministrativo->givePermissionTo('can_create_horarios');
        $roleAdministrativo->givePermissionTo('can_read_gestiones'); 
        $roleAdministrativo->givePermissionTo('can_list_gestiones');
        $roleAdministrativo->givePermissionTo('can_edit_gestiones');
        // $roleAdministrativo->givePermissionTo('can_delete_gestiones');
        $roleAdministrativo->givePermissionTo('can_create_gestiones');
        $roleAdministrativo->givePermissionTo('can_read_eventos'); 
        $roleAdministrativo->givePermissionTo('can_list_eventos');
        $roleAdministrativo->givePermissionTo('can_edit_eventos');
        $roleAdministrativo->givePermissionTo('can_delete_eventos');
        $roleAdministrativo->givePermissionTo('can_create_eventos');
        $roleAdministrativo->givePermissionTo('can_read_noticias'); 
        $roleAdministrativo->givePermissionTo('can_list_noticias');
        $roleAdministrativo->givePermissionTo('can_edit_noticias');
        $roleAdministrativo->givePermissionTo('can_delete_noticias');
        $roleAdministrativo->givePermissionTo('can_create_noticias');
        // ESTUDIANTE
        $roleEstudiante->givePermissionTo('can_view_home');
        $roleEstudiante->givePermissionTo('can_read_calificaciones');
        $roleEstudiante->givePermissionTo('can_read_events_calendario');
        $roleEstudiante->givePermissionTo('can_read_noticias'); 
        $roleEstudiante->givePermissionTo('can_list_noticias');
        // PROFESOR
        $roleProfesor->givePermissionTo('can_view_home');
        $roleProfesor->givePermissionTo('can_read_calificaciones'); 
        $roleProfesor->givePermissionTo('can_add_grades_calificaciones');
        $roleProfesor->givePermissionTo('can_edit_calificaciones');
        $roleProfesor->givePermissionTo('can_read_usuarios'); 
        $roleProfesor->givePermissionTo('can_list_usuarios');
        $roleProfesor->givePermissionTo('can_read_programas'); 
        $roleProfesor->givePermissionTo('can_list_programas');
        $roleProfesor->givePermissionTo('can_read_cursos'); 
        $roleProfesor->givePermissionTo('can_list_cursos');
        $roleProfesor->givePermissionTo('can_read_niveles'); 
        $roleProfesor->givePermissionTo('can_list_niveles');
        $roleProfesor->givePermissionTo('can_read_horarios'); 
        $roleProfesor->givePermissionTo('can_list_horarios');
        $roleProfesor->givePermissionTo('can_read_gestiones'); 
        $roleProfesor->givePermissionTo('can_list_gestiones');
        $roleProfesor->givePermissionTo('can_read_eventos'); 
        $roleProfesor->givePermissionTo('can_read_events_calendario'); 
        $roleProfesor->givePermissionTo('can_list_eventos');
        $roleProfesor->givePermissionTo('can_read_noticias'); 
        $roleProfesor->givePermissionTo('can_list_noticias');
        // SUPERADMIN
        $roleSuperAdmin->givePermissionTo('can_view_home');
        $roleSuperAdmin->givePermissionTo('can_list_usuarios');
        $roleSuperAdmin->givePermissionTo('can_edit_usuarios');
        $roleSuperAdmin->givePermissionTo('can_delete_usuarios');
        $roleSuperAdmin->givePermissionTo('can_create_usuarios');
        $roleSuperAdmin->givePermissionTo('can_read_usuarios');
        $roleSuperAdmin->givePermissionTo('can_list_grupos');
        $roleSuperAdmin->givePermissionTo('can_edit_grupos');
        $roleSuperAdmin->givePermissionTo('can_delete_grupos');
        $roleSuperAdmin->givePermissionTo('can_create_grupos');
        $roleSuperAdmin->givePermissionTo('can_add_student_grupos');
        $roleSuperAdmin->givePermissionTo('can_filter_grupos');
        $roleSuperAdmin->givePermissionTo('can_read_grupos');
        $roleSuperAdmin->givePermissionTo('can_add_grades_calificaciones');
        $roleSuperAdmin->givePermissionTo('can_edit_calificaciones');
        $roleSuperAdmin->givePermissionTo('can_read_calificaciones');
        $roleSuperAdmin->givePermissionTo('can_read_events_calendario');
        $roleSuperAdmin->givePermissionTo('can_read_programas');
        $roleSuperAdmin->givePermissionTo('can_list_programas');
        $roleSuperAdmin->givePermissionTo('can_edit_programas');
        // $roleSuperAdmin->givePermissionTo('can_delete_programas');
        $roleSuperAdmin->givePermissionTo('can_create_programas');
        $roleSuperAdmin->givePermissionTo('can_read_cursos');
        $roleSuperAdmin->givePermissionTo('can_list_cursos');
        $roleSuperAdmin->givePermissionTo('can_edit_cursos');
        // $roleSuperAdmin->givePermissionTo('can_delete_cursos');
        $roleSuperAdmin->givePermissionTo('can_create_cursos');
        $roleSuperAdmin->givePermissionTo('can_read_niveles');
        $roleSuperAdmin->givePermissionTo('can_list_niveles');
        $roleSuperAdmin->givePermissionTo('can_edit_niveles');
        // $roleSuperAdmin->givePermissionTo('can_delete_niveles');
        $roleSuperAdmin->givePermissionTo('can_create_niveles');
        $roleSuperAdmin->givePermissionTo('can_read_horarios');
        $roleSuperAdmin->givePermissionTo('can_list_horarios');
        $roleSuperAdmin->givePermissionTo('can_edit_horarios');
        // $roleSuperAdmin->givePermissionTo('can_delete_horarios');
        $roleSuperAdmin->givePermissionTo('can_create_horarios');
        $roleSuperAdmin->givePermissionTo('can_read_gestiones');
        $roleSuperAdmin->givePermissionTo('can_list_gestiones');
        $roleSuperAdmin->givePermissionTo('can_edit_gestiones');
        // $roleSuperAdmin->givePermissionTo('can_delete_gestiones');
        $roleSuperAdmin->givePermissionTo('can_create_gestiones');
        $roleSuperAdmin->givePermissionTo('can_read_eventos');
        $roleSuperAdmin->givePermissionTo('can_list_eventos');
        $roleSuperAdmin->givePermissionTo('can_edit_eventos');
        $roleSuperAdmin->givePermissionTo('can_delete_eventos');
        $roleSuperAdmin->givePermissionTo('can_create_eventos');
        $roleSuperAdmin->givePermissionTo('can_read_noticias');
        $roleSuperAdmin->givePermissionTo('can_list_noticias');
        $roleSuperAdmin->givePermissionTo('can_edit_noticias');
        $roleSuperAdmin->givePermissionTo('can_delete_noticias');
        $roleSuperAdmin->givePermissionTo('can_create_noticias');
        /**>>>>>>>>>>> END PERMISSION ASSIGNMENT <<<<<<<<<<<<<< */

        // create demo users
        $superAdmin = Factory(App\User::class)->create([
            'name' => 'Super-Admin',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('superadmin'),
        ]);//1
        $superAdmin->assignRole($roleSuperAdmin);

        $admin1 = Factory(App\User::class)->create([
            'name' => 'Paola Cespedes',
            'email' => 'p.cespedes@example.com',
            'password' => Hash::make('123456'),
        ]);//2
        $admin1->assignRole($roleAdministrativo);

        $admin2 = Factory(App\User::class)->create([
            'name' => 'Carla Jimenez',
            'email' => 'c.jimenez@example.com',
            'password' => Hash::make('123456'),
        ]);//3
        $admin2->assignRole($roleAdministrativo);

        $profesor1 = Factory(App\User::class)->create([
            'name' => 'Edgar Buezo',
            'email' => 'e.buezo@example.com',
            'password' => Hash::make('123456'),
        ]);//4
        $profesor1->assignRole($roleProfesor);

        $profesor2 = Factory(App\User::class)->create([
            'name' => 'Vanesa Lopez',
            'email' => 'v.lopez@example.com',
            'password' => Hash::make('123456'),
        ]);//5
        $profesor2->assignRole($roleProfesor);
        $profesor3 = Factory(App\User::class)->create([
            'name' => ' Ivanoska Alba',
            'email' => 'i.alba@example.com',
            'password' => Hash::make('123456'),
        ]);//6
        $profesor3->assignRole($roleProfesor);
        $profesor4 = Factory(App\User::class)->create([
            'name' => 'Gonzalo Aliaga',
            'email' => 'g.aliaga@example.com',
            'password' => Hash::make('123456'),
        ]);//7
        $profesor4->assignRole($roleProfesor);
        $profesor5 = Factory(App\User::class)->create([
            'name' => 'German Amurrio',
            'email' => 'g.amurrio@example.com',
            'password' => Hash::make('123456'),
        ]);//8
        $profesor5->assignRole($roleProfesor);
        $profesor6 = Factory(App\User::class)->create([
            'name' => 'Gilda Helen Argote Garcia',
            'email' => 'g.argote@example.com',
            'password' => Hash::make('123456'),
        ]);//9
        $profesor6->assignRole($roleProfesor);
        $profesor7 = Factory(App\User::class)->create([
            'name' => ' Douglas Arteaga',
            'email' => 'd.arteaga@example.com',
            'password' => Hash::make('123456'),
        ]);//10
        $profesor7->assignRole($roleProfesor);
        $profesor8 = Factory(App\User::class)->create([
            'name' => 'Ivan Arze Quiroga',
            'email' => 'i.arze@example.com',
            'password' => Hash::make('123456'),
        ]);//11
        $profesor8->assignRole($roleProfesor);
        $profesor9 = Factory(App\User::class)->create([
            'name' => 'Gladys Aviles',
            'email' => 'g.aviles@example.com',
            'password' => Hash::make('123456'),
        ]);//12
        $profesor9->assignRole($roleProfesor);
        $profesor10 = Factory(App\User::class)->create([
            'name' => 'Raul Azurduy',
            'email' => 'r.azurduy@example.com',
            'password' => Hash::make('123456'),
        ]);//13
        $profesor10->assignRole($roleProfesor);
        $profesor11 = Factory(App\User::class)->create([
            'name' => 'Danny Margoth Balderrama Rocha',
            'email' => 'd.balderrama@example.com',
            'password' => Hash::make('123456'),
        ]);//14
        $profesor11->assignRole($roleProfesor);
        $profesor12 = Factory(App\User::class)->create([
            'name' => 'Maria Eugenia Balderrama Rocha',
            'email' => 'm.balderrama@example.com',
            'password' => Hash::make('123456'),
        ]);//15
        $profesor12->assignRole($roleProfesor);
        $profesor13 = Factory(App\User::class)->create([
            'name' => 'Juan Alberto Block Merrit',
            'email' => 'j.block@example.com',
            'password' => Hash::make('123456'),
        ]);//16
        $profesor13->assignRole($roleProfesor);
        $profesor14 = Factory(App\User::class)->create([
            'name' => 'Yery Buezo',
            'email' => 'y.buezo@example.com',
            'password' => Hash::make('123456'),
        ]);//17
        $profesor14->assignRole($roleProfesor);
        $profesor15 = Factory(App\User::class)->create([
            'name' => 'Leny Caceres',
            'email' => 'l.caceres@example.com',
            'password' => Hash::make('123456'),
        ]);//18
        $profesor15->assignRole($roleProfesor);
        $profesor16 = Factory(App\User::class)->create([
            'name' => 'Samuel Caero',
            'email' => 's.caero@example.com',
            'password' => Hash::make('123456'),
        ]);//19
        $profesor16->assignRole($roleProfesor);
        $profesor17 = Factory(App\User::class)->create([
            'name' => 'Clelia Angelica Calani Oña',
            'email' => 'c.calani@example.com',
            'password' => Hash::make('123456'),
        ]);//20
        $profesor17->assignRole($roleProfesor);
        $profesor18 = Factory(App\User::class)->create([
            'name' => 'Eduardo Camargo',
            'email' => 'e.camargo@example.com',
            'password' => Hash::make('123456'),
        ]);//21
        $profesor18->assignRole($roleProfesor);
        $profesor19 = Factory(App\User::class)->create([
            'name' => 'Claudia Chiarella',
            'email' => 'c.chiarella@example.com',
            'password' => Hash::make('123456'),
        ]);//22
        $profesor19->assignRole($roleProfesor);
        $profesor20 = Factory(App\User::class)->create([
            'name' => 'Patty Encinas',
            'email' => 'p.encinas@example.com',
            'password' => Hash::make('123456'),
        ]);//23
        $profesor20->assignRole($roleProfesor);
        $profesor21 = Factory(App\User::class)->create([
            'name' => 'Gabriela Fernandez',
            'email' => 'g.fernandez@example.com',
            'password' => Hash::make('123456'),
        ]);//24
        $profesor21->assignRole($roleProfesor);
        $profesor22 = Factory(App\User::class)->create([
            'name' => 'Jaquelin Flores',
            'email' => 'j.flores@example.com',
            'password' => Hash::make('123456'),
        ]);//25
        $profesor22->assignRole($roleProfesor);
        $profesor23 = Factory(App\User::class)->create([
            'name' => 'Carol Galindo',
            'email' => 'c.galindo@example.com',
            'password' => Hash::make('123456'),
        ]);//26
        $profesor23->assignRole($roleProfesor);
        $profesor24 = Factory(App\User::class)->create([
            'name' => 'Mariana Garnica',
            'email' => 'm.garnica@example.com',
            'password' => Hash::make('123456'),
        ]);//27
        $profesor24->assignRole($roleProfesor);
        $profesor25 = Factory(App\User::class)->create([
            'name' => 'Susan Harvey',
            'email' => 's.harvey@example.com',
            'password' => Hash::make('123456'),
        ]);//28
        $profesor25->assignRole($roleProfesor);
        $profesor26 = Factory(App\User::class)->create([
            'name' => 'Jose Antonio Hinojosa Muñoz',
            'email' => 'j.hinojosa@example.com',
            'password' => Hash::make('123456'),
        ]);//29
        $profesor26->assignRole($roleProfesor);
        $profesor27 = Factory(App\User::class)->create([
            'name' => 'Daniela Hirmas',
            'email' => 'd.hirmas@example.com',
            'password' => Hash::make('123456'),
        ]);//30
        $profesor27->assignRole($roleProfesor);
        $profesor28 = Factory(App\User::class)->create([
            'name' => 'Jose Luis Lopez Estrada',
            'email' => 'j.lopez@example.com',
            'password' => Hash::make('123456'),
        ]);//31
        $profesor28->assignRole($roleProfesor);
        $profesor29 = Factory(App\User::class)->create([
            'name' => 'Lilian Mendez',
            'email' => 'l.mendez@example.com',
            'password' => Hash::make('123456'),
        ]);//32
        $profesor29->assignRole($roleProfesor);
        $profesor30 = Factory(App\User::class)->create([
            'name' => 'Fernando Garcia',
            'email' => 'f.garcia@example.com',
            'password' => Hash::make('123456'),
        ]);//33
        $profesor30->assignRole($roleProfesor);
        $estudiante1 = Factory(App\User::class)->create([
            'name' => 'Maria Jose Gonzales',
            'email' => 'h.soria@example.com',
            'password' => Hash::make('123456'),
        ]);//34
        $estudiante1->assignRole($roleEstudiante);
        $estudiante2 = Factory(App\User::class)->create([
            'name' => 'Lucas Ayala',
            'email' => 'l.ayala@example.com',
            'password' => Hash::make('123456'),
        ]);//35
        $estudiante2->assignRole($roleEstudiante);
        $estudiante3 = Factory(App\User::class)->create([
            'name' => 'Manuel Torrico',
            'email' => 'm.torrico@example.com',
            'password' => Hash::make('123456'),
        ]);//36
        $estudiante3->assignRole($roleEstudiante);

        $estudiante4 = Factory(App\User::class)->create([
            'name' => 'Franklin Morales',
            'email' => 'f.morales@example.com',
            'password' => Hash::make('123456'),
        ]);//37
        $estudiante4->assignRole($roleEstudiante);
        $estudiante5 = Factory(App\User::class)->create([
            'name' => 'Jhonatan Candia',
            'email' => 'j.candia@example.com',
            'password' => Hash::make('123456'),
        ]);//38
        $estudiante5->assignRole($roleEstudiante);

        $estudiante6 = Factory(App\User::class)->create([
            'name' => 'Luis Perez',
            'email' => 'l.perez@example.com',
            'password' => Hash::make('123456'),
        ]);//39
        $estudiante6->assignRole($roleEstudiante);
        $estudiante7 = Factory(App\User::class)->create([
            'name' => 'Diego Montaño Angulo',
            'email' => 'd.montaño@example.com',
            'password' => Hash::make('123456'),
        ]);//40
        $estudiante7->assignRole($roleEstudiante);
        $estudiante8 = Factory(App\User::class)->create([
            'name' => 'Mijail Blanco Mendez',
            'email' => 'm.blanco@example.com',
            'password' => Hash::make('123456'),
        ]);//41
        $estudiante8->assignRole($roleEstudiante);
        $estudiante9 = Factory(App\User::class)->create([
            'name' => 'Laida Gonzales Rojas',
            'email' => 'l.gonzales@example.com',
            'password' => Hash::make('123456'),
        ]);//42
        $estudiante9->assignRole($roleEstudiante);
        $estudiante10 = Factory(App\User::class)->create([
            'name' => 'Karen Mendieta Mendez',
            'email' => 'k.mendieta@example.com',
            'password' => Hash::make('123456'),
        ]);//43
        $estudiante10->assignRole($roleEstudiante);
        $estudiante11 = Factory(App\User::class)->create([
            'name' => 'Gabriel Guzman Perez',
            'email' => 'g.guzman@example.com',
            'password' => Hash::make('123456'),
        ]);//44
        $estudiante11->assignRole($roleEstudiante);
        $estudiante12 = Factory(App\User::class)->create([
            'name' => 'Lupe Fernandez',
            'email' => 'l.fernandez@example.com',
            'password' => Hash::make('123456'),
        ]);//45
        $estudiante12->assignRole($roleEstudiante);
        $estudiante13 = Factory(App\User::class)->create([
            'name' => 'Mariela Cladera Mamani',
            'email' => 'm.cladera@example.com',
            'password' => Hash::make('123456'),
        ]);//46
        $estudiante13->assignRole($roleEstudiante);
        $estudiante14 = Factory(App\User::class)->create([
            'name' => 'Gerardo Zeballos Liendro',
            'email' => 'g.zeballos@example.com',
            'password' => Hash::make('123456'),
        ]);//47
        $estudiante14->assignRole($roleEstudiante);
        $estudiante15 = Factory(App\User::class)->create([
            'name' => 'Mauricio Ayala Zegarra',
            'email' => 'm.ayala@example.com',
            'password' => Hash::make('123456'),
        ]);//48
        $estudiante15->assignRole($roleEstudiante);


        /**
         * Creando perfiles para los  estudiantes y docentes.
         */
        $perfilProfesor1 = PerfilUsuario::create([
            'nombres' => 'Edgar',
            'apellido_paterno' => 'Buezo',
            'apellido_materno' => '',
            'carnet_identidad' => '',
            'celular' => '',
            'user_id' => $profesor1->id
        ]);

        $perfilProfesor2 = PerfilUsuario::create([
            'nombres' => 'Vanesa',
            'apellido_paterno' => 'Lopez',
            'apellido_materno' => '',
            'carnet_identidad' => '',
            'celular' => '',
            'user_id' => $profesor2->id
        ]);

        $perfilProfesor3 = PerfilUsuario::create([
            'nombres' => 'Ivanoska',
            'apellido_paterno' => 'Alba',
            'apellido_materno' => '',
            'carnet_identidad' => '8852874',
            'celular' => '70708030',
            'user_id' => $profesor3->id
        ]);

        $perfilProfesor4 = PerfilUsuario::create([
            'nombres' => 'Gonzalo',
            'apellido_paterno' => 'Aliaga',
            'apellido_materno' => '',
            'carnet_identidad' => '8852874',
            'celular' => '79792105',
            'user_id' => $profesor4->id
        ]);

        $perfilProfesor5 = PerfilUsuario::create([
            'nombres' => 'German',
            'apellido_paterno' => 'Amurrio',
            'apellido_materno' => '',
            'carnet_identidad' => '8852874',
            'celular' => '79389975',
            'user_id' => $profesor5->id
        ]);

        $perfilProfesor6 = PerfilUsuario::create([
            'nombres' => 'Gilda Helen',
            'apellido_paterno' => 'Argote',
            'apellido_materno' => 'Garcia',
            'carnet_identidad' => '8852874',
            'celular' => '73792119',
            'user_id' => $profesor6->id
        ]);

        $perfilProfesor7 = PerfilUsuario::create([
            'nombres' => 'Douglas',
            'apellido_paterno' => 'Arteaga',
            'apellido_materno' => '',
            'carnet_identidad' => '8852874',
            'celular' => '68472256',
            'user_id' => $profesor7->id
        ]);

        $perfilProfesor8 = PerfilUsuario::create([
            'nombres' => 'Ivan',
            'apellido_paterno' => 'Arze',
            'apellido_materno' => 'Quiroga',
            'carnet_identidad' => '8852874',
            'celular' => '77908850',
            'user_id' => $profesor8->id
        ]);

        $perfilProfesor9 = PerfilUsuario::create([
            'nombres' => 'Gladys',
            'apellido_paterno' => 'Aviles',
            'apellido_materno' => '',
            'carnet_identidad' => '8852874',
            'celular' => '77900234',
            'user_id' => $profesor9->id
        ]);

        $perfilProfesor10 = PerfilUsuario::create([
            'nombres' => 'Raul',
            'apellido_paterno' => 'Azurduy',
            'apellido_materno' => '',
            'carnet_identidad' => '8852874',
            'celular' => '75997678',
            'user_id' => $profesor10->id
        ]);

        $perfilProfesor11 = PerfilUsuario::create([
            'nombres' => 'Danny Margoth',
            'apellido_paterno' => 'Balderrama',
            'apellido_materno' => 'Rocha',
            'carnet_identidad' => '8852874',
            'celular' => '70730618',
            'user_id' => $profesor11->id
        ]);

        $perfilProfesor12 = PerfilUsuario::create([
            'nombres' => 'Maria Eugenia',
            'apellido_paterno' => 'Balderrama',
            'apellido_materno' => 'Rocha',
            'carnet_identidad' => '8852874',
            'celular' => '77499964',
            'user_id' => $profesor12->id
        ]);

        $perfilProfesor13 = PerfilUsuario::create([
            'nombres' => 'Juan Alberto',
            'apellido_paterno' => 'Block',
            'apellido_materno' => 'Merritt',
            'carnet_identidad' => '8852874',
            'celular' => '72712073',
            'user_id' => $profesor13->id
        ]);

        $perfilProfesor14 = PerfilUsuario::create([
            'nombres' => 'Yery',
            'apellido_paterno' => 'Buezo',
            'apellido_materno' => '',
            'carnet_identidad' => '8852874',
            'celular' => '67489056',
            'user_id' => $profesor14->id
        ]);

        $perfilProfesor15 = PerfilUsuario::create([
            'nombres' => 'Leny',
            'apellido_paterno' => 'Caceres',
            'apellido_materno' => '',
            'carnet_identidad' => '8852874',
            'celular' => '60761188',
            'user_id' => $profesor15->id
        ]);

        $perfilProfesor16 = PerfilUsuario::create([
            'nombres' => 'Samuel',
            'apellido_paterno' => 'Caero',
            'apellido_materno' => '',
            'carnet_identidad' => '8852874',
            'celular' => '67501508',
            'user_id' => $profesor16->id
        ]);

        $perfilProfesor17 = PerfilUsuario::create([
            'nombres' => 'Clelia Angelica',
            'apellido_paterno' => 'Calani',
            'apellido_materno' => 'Oña',
            'carnet_identidad' => '8852874',
            'celular' => '78331587',
            'user_id' => $profesor17->id
        ]);

        $perfilProfesor18 = PerfilUsuario::create([
            'nombres' => 'Eduardo',
            'apellido_paterno' => 'Camargo',
            'apellido_materno' => '',
            'carnet_identidad' => '8852874',
            'celular' => '60341762',
            'user_id' => $profesor18->id
        ]);


        $perfilProfesor19 = PerfilUsuario::create([
            'nombres' => 'Claudia',
            'apellido_paterno' => 'Chiarella',
            'apellido_materno' => '',
            'carnet_identidad' => '8852874',
            'celular' => '65723505',
            'user_id' => $profesor19->id
        ]);

        $perfilProfesor20 = PerfilUsuario::create([
            'nombres' => 'Patty',
            'apellido_paterno' => 'Encinas',
            'apellido_materno' => '',
            'carnet_identidad' => '8852874',
            'celular' => '78323468',
            'user_id' => $profesor20->id
        ]);
        $perfilProfesor21 = PerfilUsuario::create([
            'nombres' => 'Gabriela',
            'apellido_paterno' => 'Fernandez',
            'apellido_materno' => '',
            'carnet_identidad' => '8852874',
            'celular' => '78323468',
            'user_id' => $profesor21->id
        ]);
        $perfilProfesor22 = PerfilUsuario::create([
            'nombres' => 'Jaquelin',
            'apellido_paterno' => 'Flores',
            'apellido_materno' => '',
            'carnet_identidad' => '8852874',
            'celular' => '61781617',
            'user_id' => $profesor22->id
        ]);
        $perfilProfesor23 = PerfilUsuario::create([
            'nombres' => 'Carol',
            'apellido_paterno' => 'Galindo',
            'apellido_materno' => '',
            'carnet_identidad' => '8852874',
            'celular' => '60725060',
            'user_id' => $profesor23->id
        ]);
        $perfilProfesor24 = PerfilUsuario::create([
            'nombres' => 'Mariana',
            'apellido_paterno' => 'Garnica',
            'apellido_materno' => '',
            'carnet_identidad' => '8852874',
            'celular' => '77485363',
            'user_id' => $profesor24->id
        ]);
        $perfilProfesor25 = PerfilUsuario::create([
            'nombres' => 'Susan',
            'apellido_paterno' => 'Harvey',
            'apellido_materno' => '',
            'carnet_identidad' => '8852874',
            'celular' => '71408298',
            'user_id' => $profesor25->id
        ]);
        $perfilProfesor26 = PerfilUsuario::create([
            'nombres' => 'Jose Antonio',
            'apellido_paterno' => 'Hinojosa',
            'apellido_materno' => 'Muñoz',
            'carnet_identidad' => '8852874',
            'celular' => '77498709',
            'user_id' => $profesor26->id
        ]);
        $perfilProfesor27 = PerfilUsuario::create([
            'nombres' => 'Daniela',
            'apellido_paterno' => 'Hirmas',
            'apellido_materno' => '',
            'carnet_identidad' => '8852874',
            'celular' => '78303650',
            'user_id' => $profesor27->id
        ]);
        $PerfilProfesor28 = PerfilUsuario::create([
            'nombres' => 'Jose Luis',
            'apellido_paterno' => 'Lopez',
            'apellido_materno' => 'Estrada',
            'carnet_identidad' => '8852874',
            'celular' => '69433349',
            'user_id' => $profesor28->id

        ]);
        $perfilProfesor29 = PerfilUsuario::create([
            'nombres' => 'Lilian',
            'apellido_paterno' => 'Mendez',
            'apellido_materno' => '',
            'carnet_identidad' => '8852874',
            'celular' => '76968421',
            'user_id' => $profesor29->id
        ]);
        $perfilProfesor30 = PerfilUsuario::create([
            'nombres' => 'Fernando',
            'apellido_paterno' => 'Garcia',
            'apellido_materno' => '',
            'carnet_identidad' => '8852874',
            'celular' => '78323468',
            'user_id' => $profesor20->id
        ]);


        $perfilEstudiante1 = PerfilUsuario::create([
            'nombres' => 'Lucas',
            'apellido_paterno' => 'Ayala',
            'apellido_materno' => 'Gonzales',
            'carnet_identidad' => '1593549',
            'celular' => '78322472',
            'user_id' => $estudiante1->id
        ]);
        $perfilEstudiante2 = PerfilUsuario::create([
            'nombres' => 'Manuel',
            'apellido_paterno' => 'Torrico',
            'apellido_materno' => 'Luizaga',
            'carnet_identidad' => '1593549',
            'celular' => '70731298',
            'user_id' => $estudiante2->id
        ]);

        $perfilEstudiante3 = PerfilUsuario::create([
            'nombres' => 'Manuel',
            'apellido_paterno' => 'Torrico',
            'apellido_materno' => 'Vega',
            'carnet_identidad' => '1593549',
            'celular' => '65738920',
            'user_id' => $estudiante3->id
        ]);

        $perfilEstudiante4 = PerfilUsuario::create([
            'nombres' => 'Franklin',
            'apellido_paterno' => 'Morales',
            'apellido_materno' => 'Lopez',
            'carnet_identidad' => '1593549',
            'celular' => '78322470',
            'user_id' => $estudiante4->id
        ]);

        $perfilEstudiante5 = PerfilUsuario::create([
            'nombres' => 'Jhonatan',
            'apellido_paterno' => 'Candia',
            'apellido_materno' => 'Romero',
            'carnet_identidad' => '1593549',
            'celular' => '78794653',
            'user_id' => $estudiante5->id
        ]);

        $perfilEstudiante6 = PerfilUsuario::create([
            'nombres' => 'Luis',
            'apellido_paterno' => 'Perez',
            'apellido_materno' => 'Rojas',
            'carnet_identidad' => '1593549',
            'celular' => '78756832',
            'user_id' => $estudiante6->id
        ]);

        $perfilEstudiante7 = PerfilUsuario::create([
            'nombres' => 'Diego',
            'apellido_paterno' => 'Montaño',
            'apellido_materno' => 'Angulo',
            'carnet_identidad' => '1593549',
            'celular' => '65732431',
            'user_id' => $estudiante7->id
        ]);

        $perfilEstudiante8 = PerfilUsuario::create([
            'nombres' => 'Mijail',
            'apellido_paterno' => 'Blanco',
            'apellido_materno' => 'Mendez',
            'carnet_identidad' => '1593549',
            'celular' => '78675432',
            'user_id' => $estudiante8->id
        ]);

        $perfilEstudiante9 = PerfilUsuario::create([
            'nombres' => 'Laida',
            'apellido_paterno' => 'Gonzales',
            'apellido_materno' => 'Rojas',
            'carnet_identidad' => '1593549',
            'celular' => '78675438',
            'user_id' => $estudiante9->id
        ]);

        $perfilEstudiante10 = PerfilUsuario::create([
            'nombres' => 'Karen',
            'apellido_paterno' => 'Mendieta',
            'apellido_materno' => 'Mendez',
            'carnet_identidad' => '1593549',
            'celular' => '78675476',
            'user_id' => $estudiante10->id
        ]);

        $perfilEstudiante11 = PerfilUsuario::create([
            'nombres' => 'Gabriel',
            'apellido_paterno' => 'Guzman',
            'apellido_materno' => 'Perez',
            'carnet_identidad' => '1593549',
            'celular' => '78675782',
            'user_id' => $estudiante11->id
        ]);

        $perfilEstudiante12 = PerfilUsuario::create([
            'nombres' => 'Lupe',
            'apellido_paterno' => 'Fernandez',
            'apellido_materno' => '',
            'carnet_identidad' => '1593549',
            'celular' => '78675874',
            'user_id' => $estudiante12->id
        ]);

        $perfilEstudiante13 = PerfilUsuario::create([
            'nombres' => 'Mariela',
            'apellido_paterno' => 'Cladera',
            'apellido_materno' => 'Mamani',
            'carnet_identidad' => '1593549',
            'celular' => '78675430',
            'user_id' => $estudiante13->id
        ]);

        $perfilEstudiante14 = PerfilUsuario::create([
            'nombres' => 'Gerardo',
            'apellido_paterno' => 'Zeballos',
            'apellido_materno' => 'Liendro',
            'carnet_identidad' => '1593549',
            'celular' => '78675123',
            'user_id' => $estudiante14->id
        ]);

        $perfilEstudiante15 = PerfilUsuario::create([
            'nombres' => 'Mauricio',
            'apellido_paterno' => 'Ayala',
            'apellido_materno' => 'Zegarra',
            'carnet_identidad' => '1593549',
            'celular' => '78675431',
            'user_id' => $estudiante15->id
        ]);
    }
}
