<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftwareEquipoComputoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('software_equipo_computo', function (Blueprint $table) {
           $table->unsignedBigInteger('id_software');
            $table->unsignedBigInteger('id_equipo_computo');
            $table->foreign('id_software')->references('id_software')->on('softwares');
            $table->foreign('id_equipo_computo')->references('id_equipo_computo')->on('equipo_computos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('software_equipo_computo');
    }
}
