<?php

use Illuminate\Database\Seeder;

class CatRestaurantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CatRestaurante::class, 50)->create();
    }
}
