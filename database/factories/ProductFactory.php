<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'desc' => $faker->sentence(10),
        'price' => $faker->numberBetween(50, 100)
    ];
});