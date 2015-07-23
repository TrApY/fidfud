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
        factory(App\Models\Categorias::class)->create([
            'nombre' => 'Diabetes',
            'id' => 1,
        ]);
        factory(App\Models\Categorias::class)->create([
            'nombre' => 'Celiaquía',
            'id' => 2,
        ]);
        factory(App\Models\Categorias::class)->create([
            'nombre' => 'Intolerancia Lactosa',
            'id' => 3,
        ]);

    }
}
