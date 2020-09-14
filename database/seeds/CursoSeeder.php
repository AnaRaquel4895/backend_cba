<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            'nombre' => 'AIT',
            'descripcion' => ''
        ]);

        DB::table('cursos')->insert([
            'nombre' => 'KCH',
            'descripcion' => ''
        ]);

        DB::table('cursos')->insert([
            'nombre' => 'PTSL',
            'descripcion' => ''
        ]);

        DB::table('cursos')->insert([
            'nombre' => 'ART',
            'descripcion' => ''
        ]);
        DB::table('cursos')->insert([
            'nombre' => 'KDC',
            'descripcion' => ''
        ]);
        DB::table('cursos')->insert([
            'nombre' => 'TSL',
            'descripcion' => ''
        ]);
        DB::table('cursos')->insert([
            'nombre' => 'TRL',
            'descripcion' => ''
        ]);
        DB::table('cursos')->insert([
            'nombre' => 'AAI',
            'descripcion' => ''
        ]);
        DB::table('cursos')->insert([
            'nombre' => 'AI',
            'descripcion' => ''
        ]);
        
        DB::table('cursos')->insert([
            'nombre' => 'TR',
            'descripcion' => ''
        ]);
        DB::table('cursos')->insert([
            'nombre' => 'ACH',
            'descripcion' => ''
        ]);
        DB::table('cursos')->insert([
            'nombre' => 'AAR',
            'descripcion' => ''
        ]);
        DB::table('cursos')->insert([
            'nombre' => 'AR',
            'descripcion' => ''
        ]);
        DB::table('cursos')->insert([
            'nombre' => 'IER',
            'descripcion' => ''
        ]);
    }
}
