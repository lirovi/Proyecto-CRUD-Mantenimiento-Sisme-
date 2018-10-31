<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion',100);
            $table->unsignedInteger('tequipo_id');
            $table->string('cod_af',20);
            $table->string('serie',20);
            $table->date('fecha_ing');
            $table->index(['id','serie']);
            $table->foreign('tequipo_id')-> references('id')->on('tipoequipos');

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
        Schema::dropIfExists('equipos');
    }
}
