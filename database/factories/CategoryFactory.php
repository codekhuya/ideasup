<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'title' => $slug = $faker->unique()->sentence($nbWords = rand(2,4), $variableNbWords = true),
        'slug' => str_slug($slug),
        'priority_id' => $faker->numberBetween($min = 0, $max = 3),
    ];
});
