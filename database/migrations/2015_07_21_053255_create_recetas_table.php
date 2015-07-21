<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas', function (Blueprint $table) {

            $table->increments('id');
            $table->string('nombre');
            $table->longText('elaboracion')->nullable();
            $table->longText('ingredientes')->nullable();
            $table->string('tiempo_elaboracion')->nullable();
            $table->string('url_video')->nullable();
            $table->string('imagen')->nullable();
            $table->string('ruta_imagen')->nullable();
            $table->timestamps();

        });

        Schema::create('categoria_receta', function (Blueprint $table) {

            $table->integer('categorias_id')->index();
            $table->foreign('categorias_id')
                ->references('grupo')
                ->on('categorias')
                ->onDelete('cascade');
            $table->integer('recetas_id')->unsigned()->index();
            $table->foreign('recetas_id')
                ->references('id')
                ->on('recetas')
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
        Schema::drop('categoria_receta');
        Schema::drop('recetas');

    }
}
