<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programas')->insert([
            'nombre' => 'Standard',
            'descripcion' => ''
        ]);//1

        DB::table('programas')->insert([
            'nombre' => 'Regular',
            'descripcion' => ''
        ]);//2

        DB::table('programas')->insert([
            'nombre' => 'Intensivo',
            'descripcion' => ''
        ]);//3
    }
}
