<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'body' => $fagker->pragraph(20),
    ];
});
