<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',15);
            $table->string('apellido',15);
            $table->string('direccion',50);
            $table->string('telefono',15);
            $table->char('sexo',1);
            $table->date('fecha_nac');
            $table->unsignedInteger('prof_id');
            $table->index(['id','apellido']);
            $table->foreign('prof_id')-> references('id')->on('profesions');
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
        Schema::dropIfExists('funcionarios');
    }
}
