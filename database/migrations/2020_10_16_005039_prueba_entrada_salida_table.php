<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PruebaEntradaSalidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrada_salida', function (Blueprint $table) {
            //$table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->string('estado');
            $table->dateTime('hora_entrada');
            $table->dateTime('hora_salida');
            $table->unsignedBigInteger('vehiculo_id');
            $table->unsignedBigInteger('usuario_id');

            $table->foreign('vehiculo_id')->references('id')->on('vehiculo')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('usuario_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /***
         Schema::table('entrada_salida',function(Blueprint $table){
            $table->dropForeign(['vehiculo_id']);
            $table->dropColumn('vehiculo_id');
            $table->dropForeign(['usuario_id']);
            $table->dropColumn('usuario_id');
        });
         */
        Schema::dropIfExists('entrada_salida');
    }
}
