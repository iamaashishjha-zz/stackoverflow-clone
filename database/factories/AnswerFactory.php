<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Answer;
use Faker\Generator as Faker;

$factory->define(Answer::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraph(rand(3,7), true),
        'user_id' => App\User::pluck('id')->random(),
        'votes_count' => rand(0,5),
    ];
});
