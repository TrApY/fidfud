<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasCategorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticia_categoria', function (Blueprint $table) {
            $table->increments('id');
            //Id Restaurante
            $table->unsignedInteger('noticia_id');
            $table->foreign('noticia_id')->references('id')->on('noticias');
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
        Schema::drop('noticia_categoria');
    }
}
