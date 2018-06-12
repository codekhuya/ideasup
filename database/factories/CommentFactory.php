<?php

use Faker\Generator as Faker;
use App\Article;
use App\User;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->sentence($nbWords = rand(5,99), $variableNbWords = true),
        'status' => $faker->numberBetween($min=1, $max=2),
        'article_id' => Article::inRandomOrder()->first()->id,
        'user_id' => User::inRandomOrder()->first()->id,
    ];
});
