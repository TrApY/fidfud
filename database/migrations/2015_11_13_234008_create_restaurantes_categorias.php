<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantesCategorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurante_categoria', function (Blueprint $table) {
            $table->increments('id');
            //Id Restaurante
            $table->unsignedInteger('restaurante_id');
            $table->foreign('restaurante_id')->references('id')->on('restaurantes');
            //Id Categoria
            $table->unsignedInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
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
        Schema::drop('restaurante_categoria');
    }
}
