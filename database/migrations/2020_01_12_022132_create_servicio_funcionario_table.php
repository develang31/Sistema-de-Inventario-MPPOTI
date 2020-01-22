<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicioFuncionarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_funcionario', function (Blueprint $table) {
           $table->unsignedBigInteger('id_servicio');
           $table->unsignedBigInteger('id_funcionario');
           $table->foreign('id_servicio')->references('id_servicio')->on('servicios');
           $table->foreign('id_funcionario')->references('id_funcionario')->on('funcionarios'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicio_funcionario');
    }
}
