<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiesgoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riesgo', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nombreRiesgo');
        $table->string('descripcion');
        $table->integer('probRiesgo');
        $table->string('factoresRiesgo');
        $table->string('reduccionRiesgo');
        $table->string('supervisionRiesgo');
        $table->enum('impactoRiesgo',['Catastrofico', 'Critico', 'Marginal', 'Despreciable',]);
        $table->integer('categoria_riesgo_id')->unsigned();

        $table->foreign('categoria_riesgo_id')->references('id')->on('categoriaRiesgo');

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
        Schema::drop('riesgo');

    }
}
