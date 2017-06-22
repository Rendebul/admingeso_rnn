<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateErrorArchivoCargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('error_archivo_cargas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('archivo_carga_id');
            $table->string('titulo_error');
            $table->integer('linea');
            $table->string('mensaje_resumen');
            $table->foreign('archivo_carga_id')
                ->references('id')
                ->on('archivo_cargas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('error_archivo_cargas');
    }
}
