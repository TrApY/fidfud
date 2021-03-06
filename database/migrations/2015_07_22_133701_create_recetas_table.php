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
		Schema::create('recetas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre')->required();
			$table->text('elaboracion')->nullable();
			$table->text('ingredientes')->nullable();
			$table->string('tiempo_elaboracion')->nullable();
			$table->string('url_video')->nullable();
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
		Schema::drop('recetas');
	}

}
