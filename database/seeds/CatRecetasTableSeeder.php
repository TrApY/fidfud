<?php

use Illuminate\Database\Seeder;

class CatRecetasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CatReceta::class, 50)->create();
    }
}
