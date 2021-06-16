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
        ]);//1

        DB::table('horarios')->insert([
            'nombre' => '17:00-18:30',
            'descripcion' => ''
        ]);//2

        DB::table('horarios')->insert([
            'nombre' => '15:45-17:00',
            'descripcion' => ''
        ]);//3

        DB::table('horarios')->insert([
            'nombre' => '08:35-11:45',
            'descripcion' => ''
         ]);//4
         DB::table('horarios')->insert([
            'nombre' => '13:45-17:00',
            'descripcion' => ''
         ]);//5
         DB::table('horarios')->insert([
            'nombre' => '07:00-08:30',
            'descripcion' => ''
         ]);//6
         DB::table('horarios')->insert([
            'nombre' => '10:15-11:45',
            'descripcion' => ''
         ]);//7
         DB::table('horarios')->insert([
            'nombre' => '18:45-20:15',
            'descripcion' => ''
         ]);//8
         DB::table('horarios')->insert([
            'nombre' => '20:15-21:45',
            'descripcion' => ''
         ]);//9
         DB::table('horarios')->insert([
            'nombre' => '08:30-09:45',
            'descripcion' => ''
         ]);//10
         DB::table('horarios')->insert([
            'nombre' => '14:30-15:45',
            'descripcion' => ''
         ]);//11
         DB::table('horarios')->insert([
            'nombre' => '10:15-11:30',
            'descripcion' => ''
         ]);//12

         DB::table('horarios')->insert([
            'nombre' => '07:00-10:15',
            'descripcion' => ''
         ]);//13
   
        }

}
