<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $slug = $faker->unique()->sentence($nbWords = 6, $variableNbWords = true),
        'summary' => $faker->text($maxNbChars = 200),
        'content' => $faker->text($maxNbChars = rand(299,999)),
        'status' => $faker->numberBetween($min = 0, $max = 1),
        'view_count' => $faker->numberBetween($min = 100, $max = 9000),
        'share_count' => $faker->numberBetween($min = 10, $max = 900),
        'slug' => str_slug($slug),
        'highlight' => $faker->numberBetween($min = 0, $max = 1),
        'type' => $faker->randomElement($array = array ('post','idea','page')),
        // 'user_id' => 9,
        'user_id' => User::inRandomOrder()->first()->id,
        // 'user_id' => User::orderByRaw('RAND()')->first()->id,
        // 'publish_at' => ,
    ];
});
