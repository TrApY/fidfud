<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'role' => 'user'
    ];
});

$factory->define(App\Models\Categorias::class, function ($faker) {
    return [
        'nombre' => $faker->name,
        'id' => $faker->randomElement([1, 2, 3]),
    ];
});

$factory->define(App\Models\Restaurantes::class, function ($faker) {
    return [
        'nombre' => $faker->name,
        'tipo_cocina' => $faker->randomElement(['Española', 'Americana', 'Mexicana']),
        'direccion' => $faker->streetAddress,
        'telefono' => $faker->phoneNumber,
        'imagen' => "restaurantes/img.jpg",
        'diabetes' => $faker->randomElement([1, 0,]),
        'celiaquia' => $faker->randomElement([1, 0,]),
        'lactosa' => $faker->randomElement([1, 0,]),

    ];
});


$factory->define(App\Models\Recetas::class, function ($faker) {
    return [
        'nombre' => $faker->name,
        'elaboracion' => $faker->paragraph(3),
        'ingredientes' => $faker->word,
        'tiempo_elaboracion' => '1:00:00',
        'url_video' => $faker->imageUrl(),
        'imagen' => "recetas/img.jpg",
        'diabetes' => $faker->randomElement([1, 0,]),
        'celiaquia' => $faker->randomElement([1, 0,]),
        'lactosa' => $faker->randomElement([1, 0,]),

    ];
});

$factory->define(App\Models\Noticias::class, function ($faker) {
    return [
        'titulo' => $faker->name,
        'noticia' => $faker->paragraph(3),
        'url_video' => $faker->imageUrl,
        'imagen' => "noticias/img.jpg",
        'diabetes' => $faker->randomElement([1, 0,]),
        'celiaquia' => $faker->randomElement([1, 0,]),
        'lactosa' => $faker->randomElement([1, 0,]),

    ];
});
