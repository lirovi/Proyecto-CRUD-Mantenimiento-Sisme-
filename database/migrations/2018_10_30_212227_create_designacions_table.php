<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion',30);
            $table->index(['id','descripcion']);
            $table->unsignedInteger('fun_id');
            $table->unsignedInteger('cargo_id');
            $table->date('fechadesigna');
            $table->char('estado',1);
            $table->foreign('fun_id')-> references('id')->on('funcionarios');
            $table->foreign('cargo_id')-> references('id')->on('cargos');

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
        Schema::dropIfExists('designacions');
    }
}
