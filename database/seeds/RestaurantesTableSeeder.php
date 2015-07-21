<?php

use Illuminate\Database\Seeder;

class RestaurantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Restaurante::class, 50)->create();
    }
}
