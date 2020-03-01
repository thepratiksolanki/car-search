<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement($array = array ('Audi','BMW','Ford')),
        'model' => $faker->word(),
        'year' => $faker->numberBetween($min = 2000, $max = 2019),
        'description' => $faker->sentence($nbWords = 15, $variableNbWords = true),
        'image' => 'https://loremflickr.com/640/240/cars',
        'price' => $faker->numberBetween($min = 10000 , $max = 45000),
    ];
});
