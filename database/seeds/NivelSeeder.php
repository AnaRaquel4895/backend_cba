<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('niveles')->insert([
            'nombre' => '0A',
            'descripcion' => ''
        ]);

        DB::table('niveles')->insert([
            'nombre' => '0B',
            'descripcion' => ''
        ]);

        DB::table('niveles')->insert([
            'nombre' => '0C',
            'descripcion' => ''
        ]);

        DB::table('niveles')->insert([
            'nombre' => '0D',
            'descripcion' => ''
        ]);

        DB::table('niveles')->insert([
            'nombre' => '1A',
            'descripcion' => ''
        ]);

        DB::table('niveles')->insert([
            'nombre' => '1B',
            'descripcion' => ''
        ]);

        DB::table('niveles')->insert([
            'nombre' => '1C',
            'descripcion' => ''
        ]);

        DB::table('niveles')->insert([
            'nombre' => '1D',
            'descripcion' => ''
        ]);
    }
}
