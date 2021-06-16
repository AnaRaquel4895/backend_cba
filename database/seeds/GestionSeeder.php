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
        ]);//1
        DB::table('gestiones')->insert([
            'nombre' => '2021',
            'descripcion' => ''
        ]);//2
        DB::table('gestiones')->insert([
            'nombre' => '2022',
            'descripcion' => ''
        ]);//3
        DB::table('gestiones')->insert([
            'nombre' => '2023',
            'descripcion' => ''
        ]);//4
        DB::table('gestiones')->insert([
            'nombre' => '2024',
            'descripcion' => ''
        ]);//5
    }
}
