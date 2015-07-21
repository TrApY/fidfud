<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Categoria::class)->create([
            'nombre' => 'Diabetes',
            'grupo' => 1,
        ]);
        factory(App\Categoria::class)->create([
            'nombre' => 'Celiaquía',
            'grupo' => 2,
        ]);
        factory(App\Categoria::class)->create([
            'nombre' => 'Intolerancia Lactosa',
            'grupo' => 3,
        ]);

    }
}
