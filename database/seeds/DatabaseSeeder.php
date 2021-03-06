<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         $this->call(UserTableSeeder::class);
         $this->call(CategoriasTableSeeder::class);
         $this->call(RestaurantesTableSeeder::class);
         $this->call(RecetasTableSeeder::class);
         $this->call(NoticiasTableSeeder::class);

        Model::reguard();
    }
}
