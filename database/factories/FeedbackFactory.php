<?php

use Faker\Generator as Faker;

$factory->define(App\Feedback::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email'=> $faker->freeEmail,
        'content'=> $faker->realText,
    ];
});
