<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'title' => $faker->sentence(3, false),
        'description' => $faker->text(),
        'pricing' => $faker->randomNumber(5,false),
    ];
});
