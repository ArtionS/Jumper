<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brincolin;
use Faker\Generator as Faker;

$factory->define(Brincolin::class, function (Faker $faker) {
    $title = $faker->sentence(2);
    return [
        'brincolin' => $title,
        'detalles' => $faker->text(20),
        'ancho' => rand(2 , 3),
        'alto' => rand(2 , 3),
        'largo' => rand(2 , 4),
        'precio' => rand(300 , 600),
        'disponibilidad' => rand(0 , 1),
    ];
});
