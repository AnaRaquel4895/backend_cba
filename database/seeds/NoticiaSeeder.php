<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('noticias')->insert([
            'titulo' => 'Descuento Estudiante',
            'descripcion' => 'El siguiente descuento es apto para todo aquel estudiante que tenga en sus últimas 6 notas de los últimos 6 meses una nota superior o igual a 80 puntos, de acuerdo al promedio se le asignará el descuento. Se recibiran postualntes solo el mes de noviembre mas info con el 79869649',
            'fecha' => '2021-03-01'
        ]);
    }
}
