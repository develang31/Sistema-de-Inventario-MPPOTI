<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('software', function (Blueprint $table) {
            $table->bigIncrements('id_software');
            $table->string('nombre_software',100);
     	    $table->text('descripcion');
	    $table->unsignedBigInteger('id_tipo_software');
            $table->foreign('id_tipo_software')->references('id_tipo_software')->on('tipo_softwares');
            $table->unsignedBigInteger('id_tipo_licencia');
            $table->foreign('id_tipo_licencia')->references('id_tipo_licencia')->on('tipo_licencias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('software');
    }
}
