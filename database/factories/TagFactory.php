<?php

use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {
    return [
        'title' => $slug = $faker->unique()->word,
        'slug' => $slug.'-tag',
        'priority_id' => $faker->numberBetween(0,3),
    ];
});
