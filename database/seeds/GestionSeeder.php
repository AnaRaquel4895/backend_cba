<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gestiones')->insert([
            'nombre' => '2020',
            'descripcion' => ''
        ]);
    }
}
