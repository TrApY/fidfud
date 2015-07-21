<?php

use Illuminate\Database\Seeder;

class CatNoticiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CatNoticia::class, 50)->create();
    }
}
