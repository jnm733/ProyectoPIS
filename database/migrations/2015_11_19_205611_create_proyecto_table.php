<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreProyecto');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->string('descripcion');
            $table->integer('tipo_proyecto_id')->unsigned();

            $table->foreign('tipo_proyecto_id')->references('id')->on('tipoProyecto');
            $table->timestamps();
        });

        Schema::create('proyecto_user', function(Blueprint $table){
           $table->increments('id');
           $table->integer('user_id')->unsigned();
           $table->integer('proyecto_id')->unsigned();
           $table->boolean('jefe');

           $table->foreign('user_id')->references('id')->on('users');
           $table->foreign('proyecto_id')->references('id')->on('proyecto');

           $table->timestamps();

        });

        Schema::create('proyecto_riesgo', function(Blueprint $table){
           $table->increments('id');
           $table->integer('proyecto_id')->unsigned();
           $table->integer('riesgo_id')->unsigned();

           $table->foreign('proyecto_id')->references('id')->on('proyecto');
           $table->foreign('riesgo_id')->references('id')->on('riesgo');

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
        Schema::drop('proyecto');
    }
}
