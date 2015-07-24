<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigrateRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recetas', function (Blueprint $table) {

            $table->dropColumn('url_video');
            $table->dropColumn('tiempo_elaboracion');
            $table->dropColumn('ingredientes');
            $table->text('descripcion')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recetas', function (Blueprint $table) {

            $table->text('ingredientes')->nullable();
            $table->string('tiempo_elaboracion')->nullable();
            $table->string('url_video')->nullable();

        });
    }
}
