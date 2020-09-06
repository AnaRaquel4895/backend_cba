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
    }
}
