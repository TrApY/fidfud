<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecetasCategorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receta_categoria', function (Blueprint $table) {
            $table->increments('id');
            //Id Recetas
            $table->unsignedInteger('receta_id');
            $table->foreign('receta_id')->references('id')->on('recetas');
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
        Schema::drop('receta_categoria');
    }
}
