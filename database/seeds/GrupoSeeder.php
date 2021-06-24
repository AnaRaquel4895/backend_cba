<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupos')->insert([
            'perfil_usuario_id' => '8',
            'programa_id' => '3',
            'curso_id' => '1',
            'nivel_id' => '5',
            'horario_id' => '13',
            'gestion_id' => '1',
            'periodo' => 'Marzo'
            
        ]);
        DB::table('grupos')->insert([
            'perfil_usuario_id' => '11',
            'programa_id' => '2',
            'curso_id' => '4',
            'nivel_id' => '6',
            'horario_id' => '12',
            'gestion_id' => '2',
            'periodo' => 'Junio'
            
        ]);
        DB::table('grupos')->insert([
            'perfil_usuario_id' => '15',
            'programa_id' => '1',
            'curso_id' => '3',
            'nivel_id' => '5',
            'horario_id' => '11',
            'gestion_id' => '3',
            'periodo' => 'Noviembre'
            
        ]);
        DB::table('grupos')->insert([
            'perfil_usuario_id' => '17',
            'programa_id' => '3',
            'curso_id' => '3',
            'nivel_id' => '6',
            'horario_id' => '11',
            'gestion_id' => '2',
            'periodo' => 'Agosto'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '15',
            'programa_id' => '2',
            'curso_id' => '3',
            'nivel_id' => '5',
            'horario_id' => '11',
            'gestion_id' => '3',
            'periodo' => 'Noviembre'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '20',
            'programa_id' => '1',
            'curso_id' => '3',
            'nivel_id' => '5',
            'horario_id' => '3',
            'gestion_id' => '3',
            'periodo' => 'Agosto'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '21',
            'programa_id' => '1',
            'curso_id' => '2',
            'nivel_id' => '5',
            'horario_id' => '3',
            'gestion_id' => '2',
            'periodo' => 'Abril'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '22',
            'programa_id' => '2',
            'curso_id' => '10',
            'nivel_id' => '7',
            'horario_id' => '2',
            'gestion_id' => '2',
            'periodo' => 'Enero'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '23',
            'programa_id' => '3',
            'curso_id' => '9',
            'nivel_id' => '33',
            'horario_id' => '4',
            'gestion_id' => '2',
            'periodo' => 'Marzo'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '24',
            'programa_id' => '3',
            'curso_id' => '1',
            'nivel_id' => '30',
            'horario_id' => '5',
            'gestion_id' => '3',
            'periodo' => 'Noviembre'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '25',
            'programa_id' => '2',
            'curso_id' => '4',
            'nivel_id' => '31',
            'horario_id' => '2',
            'gestion_id' => '2',
            'periodo' => 'Junio'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '26',
            'programa_id' => '3',
            'curso_id' => '5',
            'nivel_id' => '18',
            'horario_id' => '13',
            'gestion_id' => '1',
            'periodo' => 'Diciembre'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '27',
            'programa_id' => '1',
            'curso_id' => '3',
            'nivel_id' => '5',
            'horario_id' => '11',
            'gestion_id' => '3',
            'periodo' => 'Julio'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '28',
            'programa_id' => '2',
            'curso_id' => '4',
            'nivel_id' => '7',
            'horario_id' => '2',
            'gestion_id' => '2',
            'periodo' => 'Agosto'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '30',
            'programa_id' => '3',
            'curso_id' => '1',
            'nivel_id' => '1',
            'horario_id' => '4',
            'gestion_id' => '1',
            'periodo' => 'Enero'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '15',
            'programa_id' => '3',
            'curso_id' => '1',
            'nivel_id' => '10',
            'horario_id' => '5',
            'gestion_id' => '1',
            'periodo' => 'Febrero'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '16',
            'programa_id' => '2',
            'curso_id' => '7',
            'nivel_id' => '8',
            'horario_id' => '9',
            'gestion_id' => '2',
            'periodo' => 'Marzo'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '17',
            'programa_id' => '1',
            'curso_id' => '5',
            'nivel_id' => '6',
            'horario_id' => '3',
            'gestion_id' => '3',
            'periodo' => 'Abril'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '18',
            'programa_id' => '1',
            'curso_id' => '6',
            'nivel_id' => '7',
            'horario_id' => '10',
            'gestion_id' => '3',
            'periodo' => 'Mayo'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '19',
            'programa_id' => '2',
            'curso_id' => '4',
            'nivel_id' => '9',
            'horario_id' => '8',
            'gestion_id' => '2',
            'periodo' => 'Junio'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '20',
            'programa_id' => '3',
            'curso_id' => '1',
            'nivel_id' => '9',
            'horario_id' => '13',
            'gestion_id' => '1',
            'periodo' => 'Julio'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '21',
            'programa_id' => '3',
            'curso_id' => '1',
            'nivel_id' => '6',
            'horario_id' => '13',
            'gestion_id' => '1',
            'periodo' => 'Agosto'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '22',
            'programa_id' => '2',
            'curso_id' => '4',
            'nivel_id' => '10',
            'horario_id' => '7',
            'gestion_id' => '2',
            'periodo' => 'Septiembre'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '23',
            'programa_id' => '1',
            'curso_id' => '2',
            'nivel_id' => '5',
            'horario_id' => '11',
            'gestion_id' => '3',
            'periodo' => 'Noviembre'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '24',
            'programa_id' => '1',
            'curso_id' => '3',
            'nivel_id' => '5',
            'horario_id' => '3',
            'gestion_id' => '3',
            'periodo' => 'Diciembre'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '25',
            'programa_id' => '2',
            'curso_id' => '7',
            'nivel_id' => '15',
            'horario_id' => '6',
            'gestion_id' => '2',
            'periodo' => 'Enero'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '26',
            'programa_id' => '3',
            'curso_id' => '1',
            'nivel_id' => '5',
            'horario_id' => '4',
            'gestion_id' => '1',
            'periodo' => 'Febrero'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '27',
            'programa_id' => '3',
            'curso_id' => '1',
            'nivel_id' => '2',
            'horario_id' => '5',
            'gestion_id' => '1',
            'periodo' => 'Marzo'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '28',
            'programa_id' => '2',
            'curso_id' => '4',
            'nivel_id' => '16',
            'horario_id' => '2',
            'gestion_id' => '2',
            'periodo' => 'Abril'
            
        ]);DB::table('grupos')->insert([
            'perfil_usuario_id' => '30',
            'programa_id' => '1',
            'curso_id' => '5',
            'nivel_id' => '9',
            'horario_id' => '10',
            'gestion_id' => '3',
            'periodo' => 'Mayo'
            
        ]);
        
        }
}
