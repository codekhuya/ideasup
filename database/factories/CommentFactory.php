<?php

use Faker\Generator as Faker;
use App\Article;
use App\User;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'status' => $faker->numberBetween($min=0, $max=1),
        'user_id' => User::inRandomOrder()->first()->id,
        'article_id' => Article::inRandomOrder()->first()->id,
    ];
});
