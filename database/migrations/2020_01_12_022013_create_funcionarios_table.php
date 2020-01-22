<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
          $table->bigIncrements('id_funcionario');
          $table->unsignedBigInteger('id_area');
          $table->unsignedBigInteger('id_cargo');
          $table->string('nombre',50);
          $table->string('apellido_paterno',50);
          $table->string('apellido_materno',50);
          $table->foreign('id_area')->references('id_area')->on('areas');
          $table->foreign('id_cargo')->references('id_cargo')->on('cargos');
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
