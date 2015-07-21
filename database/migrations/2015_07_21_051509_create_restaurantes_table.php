<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurantes', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('nombre');
            $table->string('tipo_cocina')->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('informacion')->nullable();
            $table->string('imagen')->nullable();
            $table->string('ruta_imagen')->nullable();
            $table->timestamps();

        });

        Schema::create('categoria_restaurante', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->integer('categorias_id')->index();
            $table->foreign('categorias_id')
                ->references('grupo')
                ->on('categorias')
                ->onDelete('cascade');

            $table->integer('restaurantes_id')->unsigned()->index();
            $table->foreign('restaurantes_id')
                ->references('id')
                ->on('restaurantes')
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
        Schema::drop('categoria_restaurante');
        Schema::drop('restaurantes');

    }
}
