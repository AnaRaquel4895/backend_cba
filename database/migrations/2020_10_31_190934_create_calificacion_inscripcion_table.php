<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionInscripcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones_inscripciones', function (Blueprint $table) {
            $table->id();
            $table->integer('inscripcion_grupo_id')->unsigned();
            $table->integer('quiz1')->default(0);
            $table->integer('quiz2')->default(0);
            $table->integer('quiz3')->default(0);
            $table->integer('quiz4')->default(0);
            $table->string('comments')->default('');
            $table->foreign('inscripcion_grupo_id')->references('id')->on('inscripcion_grupo')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificaciones_inscripciones');
    }
}
