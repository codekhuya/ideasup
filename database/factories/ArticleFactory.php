<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $slug = $faker->sentence($nbWords = 6, $variableNbWords = true),
        'summary' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'content' => $faker->paragraph($nbSentences = 15, $variableNbSentences = true) ,
        'view_count' => $faker->numberBetween($min = 99, $max = 9999),
        'share_count' => $faker->numberBetween($min = 1, $max = 999),
        'slug' => str_slug($slug),
        'type' => $faker->randomElement($array = array ('idea','post','page')),
        'status' => $faker->numberBetween($min=0, $max=1),
        'publish_at' => $faker->dateTime($max = 'now', $timezone = null),
        'user_id' => User::inRandomOrder()->first()->id,
    ];
});
