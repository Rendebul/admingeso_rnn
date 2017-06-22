<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensajeErrorArchivoCargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensaje_error_archivo_cargas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('error_archivo_carga_id');
            $table->text('mensaje');
            $table->foreign('error_archivo_carga_id')
                ->references('id')
                ->on('error_archivo_cargas')
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
        Schema::dropIfExists('mensaje_error_archivo_cargas');
    }
}
