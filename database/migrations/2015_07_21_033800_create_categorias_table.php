<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->string('nombre');
            $table->integer('grupo')->primary();
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
        /*Schema::drop('categoria_restaurante');
        Schema::drop('categoria_noticia');
        Schema::drop('categoria_receta');*/
        Schema::drop('categorias');
    }
}
