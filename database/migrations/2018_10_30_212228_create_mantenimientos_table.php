<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('equipo_id');
              $table->unsignedInteger('fun_id');
              $table->unsignedInteger('tecnico_id');
              $table->unsignedInteger('tipoman_id');
              $table->unsignedInteger('diag_id');
              $table->date('fechadiag');
              $table->unsignedInteger('solucion_id');
              $table->date('fechasol');
              $table->index(['id']);

              $table->foreign('equipo_id')-> references('id')->on('equipos');
              $table->foreign('fun_id')-> references('id')->on('funcionarios');
              $table->foreign('tecnico_id')-> references('id')->on('designacions');
              $table->foreign('tipoman_id')-> references('id')->on('tipomants');
              $table->foreign('diag_id')-> references('id')->on('diagnosticos');
              $table->foreign('solucion_id')-> references('id')->on('solucions');
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
        Schema::dropIfExists('mantenimientos');
    }
}
