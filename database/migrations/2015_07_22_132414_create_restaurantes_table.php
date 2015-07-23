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
		Schema::create('restaurantes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre')->unique()->required();
			$table->string('tipo_cocina')->nullable();
			$table->string('direccion')->nullable();
			$table->string('telefono')->nullable();
			$table->string('imagen')->nullable();
			$table->boolean('diabetes');
			$table->boolean('celiaquia');
			$table->boolean('lactosa');
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
		Schema::drop('restaurantes');
	}

}
