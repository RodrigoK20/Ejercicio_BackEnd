<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('descripcion')->nullable();
            $table->string('ubicacion')->nullable();
            $table->date('fecha_inicio_date');
            $table->date('fecha_fin_date');
            $table->integer('horas_curso');
            $table->decimal('costo');
            $table->integer('numero_participantes');
            $table->integer('cantidad_evaluaciones');
            $table->string('contrato_numero');
            $table->string('orden_compra')->nullable();
            $table->string('compra_bolsa')->nullable();
            $table->integer('item')->nullable();
            $table->string('programa')->nullable();

            //FK Municipio
            $table->unsignedBigInteger('municipio_id')->unsigned();
            $table->foreign('municipio_id')->references('id')->on('municipios');

             //FK Modalidad
            $table->unsignedBigInteger('modalidad_id')->unsigned();
            $table->foreign('modalidad_id')->references('id')->on('modalidads');

            //FK Tipo_Costo
            $table->unsignedBigInteger('tipo_costo_id')->unsigned();
            $table->foreign('tipo_costo_id')->references('id')->on('tipo_costos');

            //FK Instructor
            $table->unsignedBigInteger('instructor_id')->unsigned();
            $table->foreign('instructor_id')->references('id')->on('instructors');

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
        Schema::dropIfExists('cursos');
    }
}
