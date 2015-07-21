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

$factory->define(App\Categoria::class, function ($faker) {
    return [
        'nombre' => $faker->name,
        'grupo' => $faker->randomElement([1, 2, 3]),
    ];
});

$factory->define(App\Restaurante::class, function ($faker) {
    return [
        'nombre' => $faker->name,
        'tipo_cocina' => $faker->randomElement(['Española', 'Americana', 'Mexicana']),
        'direccion' => $faker->streetAddress,
        'telefono' => $faker->phoneNumber,
        'imagen' => $faker->numerify('img.###'),
        'ruta_imagen' => '/img',

    ];
});

$factory->define(App\CatRestaurante::class, function ($faker) {
    return [
        'categorias_id' => $faker->randomElement([1, 2, 3]),
        'restaurantes_id' => $faker->unique()->numberBetween(1, 50),
    ];
});

$factory->define(App\Receta::class, function ($faker) {
    return [
        'nombre' => $faker->name,
        'elaboracion' => $faker->paragraph(3),
        'ingredientes' => $faker->word,
        'tiempo_elaboracion' => $faker->time('1:00:00'),
        'url_video' => $faker->imageUrl(),
        'imagen' => $faker->numerify('img.###'),
        'ruta_imagen' => '/img',

    ];
});

$factory->define(App\CatReceta::class, function ($faker) {
    return [
        'categorias_id' => $faker->randomElement([1, 2, 3]),
        'recetas_id' => $faker->unique()->numberBetween(1, 50),
    ];
});

$factory->define(App\Noticia::class, function ($faker) {
    return [
        'titulo' => $faker->name,
        'noticia' => $faker->paragraph(3),
        'url_video' => $faker->imageUrl,
        'imagen' => $faker->numerify('img.###'),
        'ruta_imagen' => '/img',

    ];
});

$factory->define(App\CatNoticia::class, function ($faker) {
    return [
        'categorias_id' => $faker->randomElement([1, 2, 3]),
        'noticias_id' => $faker->unique()->numberBetween(1, 50),
    ];
});
