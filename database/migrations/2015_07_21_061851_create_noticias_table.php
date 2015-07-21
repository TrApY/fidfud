<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {

            $table->increments('id');
            $table->string('titulo');
            $table->longText('noticia');
            $table->string('url_video')->nullable();
            $table->string('imagen')->nullable();
            $table->string('ruta_imagen')->nullable();
            $table->timestamps();

        });

        Schema::create('categoria_noticia', function (Blueprint $table) {

            $table->integer('categorias_id')->index();
            $table->foreign('categorias_id')
                ->references('grupo')
                ->on('categorias')
                ->onDelete('cascade');

            $table->integer('noticias_id')->unsigned()->index();
            $table->foreign('noticias_id')
                ->references('id')
                ->on('noticias')
                ->onDelete('cascade');

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
        Schema::drop('categoria_noticia');
        Schema::drop('noticias');

    }
}
