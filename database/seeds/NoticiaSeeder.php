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
        DB::table('noticias')->insert([
            'titulo' => 'Becas CHOP',
            'descripcion' => 'Atención si tienes algun familiar, amigo o conocido Afroboliviano y este interesado en ganarse una beca para aprender inglés que incluye mensualidades, libros y apoyo para transporte, esta es su oportunidad. Mas información en el sgte link https://fb.watch/2LAqzlZ2n6/',
            'fecha' => '2021-03-20'
        ]);
        DB::table('noticias')->insert([
            'titulo' => 'Descuento alumnos nuevos',
            'descripcion' => 'Si tienes algún amigo, conocido o familiar que nunca haya estado antes en el Centro Boliviano Americano y tenga pensado aprender inglés, puede inscribirse el mes de Enero con un descuento del 40% en sus mensualidades de Enero y Febrero. Mas info con los sgtes números 79867654 - 70970892',
            'fecha' => '2021-04-02'
        ]);
        DB::table('noticias')->insert([
            'titulo' => 'Anuncio Inscripciones',
            'descripcion' => 'No te olvides que puedes realizar tu inscripción con anticipación si tienes en tu nota del midterm una nota mayor a 79, lo puedes hacer ahora mismo sin necesidad de esperar inscripciones del sgte mes.',
            'fecha' => '2021-04-07'
        ]);

    }
}
