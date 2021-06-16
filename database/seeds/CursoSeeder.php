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
        ]);//1

        DB::table('cursos')->insert([
            'nombre' => 'KCH',
            'descripcion' => ''
        ]);//2

        DB::table('cursos')->insert([
            'nombre' => 'PTSL',
            'descripcion' => ''
        ]);//3

        DB::table('cursos')->insert([
            'nombre' => 'ART',
            'descripcion' => ''
        ]);//4
        DB::table('cursos')->insert([
            'nombre' => 'KDC',
            'descripcion' => ''
        ]);//5
        DB::table('cursos')->insert([
            'nombre' => 'TSL',
            'descripcion' => ''
        ]);//6
        DB::table('cursos')->insert([
            'nombre' => 'TRL',
            'descripcion' => ''
        ]);//7
        DB::table('cursos')->insert([
            'nombre' => 'AAI',
            'descripcion' => ''
        ]);//8
        DB::table('cursos')->insert([
            'nombre' => 'AI',
            'descripcion' => ''
        ]);//9
        
        DB::table('cursos')->insert([
            'nombre' => 'TR',
            'descripcion' => ''
        ]);//10
        DB::table('cursos')->insert([
            'nombre' => 'ACH',
            'descripcion' => ''
        ]);//11
        DB::table('cursos')->insert([
            'nombre' => 'AAR',
            'descripcion' => ''
        ]);//12
        DB::table('cursos')->insert([
            'nombre' => 'AR',
            'descripcion' => ''
        ]);//13
        DB::table('cursos')->insert([
            'nombre' => 'IER',
            'descripcion' => ''
        ]);//14
    }
}
