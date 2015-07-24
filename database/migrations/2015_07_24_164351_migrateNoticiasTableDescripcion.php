<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigrateNoticiasTableDescripcion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('noticias', function (Blueprint $table) {

            $table->dropColumn('url_video');
            $table->dropColumn('imagen');
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
        Schema::table('noticias', function (Blueprint $table) {

            $table->string('url_video')->nullable();
            $table->string('imagen')->nullable();

        });
    }
}
