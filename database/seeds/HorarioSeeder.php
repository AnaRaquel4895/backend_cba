<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('horarios')->insert([
            'nombre' => '18:35-21:45',
            'descripcion' => ''
        ]);

        DB::table('horarios')->insert([
            'nombre' => '17:00-18:35',
            'descripcion' => ''
        ]);

        DB::table('horarios')->insert([
            'nombre' => '15:35-17:00',
            'descripcion' => ''
        ]);
    }
}
