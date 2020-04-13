<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Todo;
use App\User;
use Faker\Generator as Faker;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 3),
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'priority' => $faker->randomElement($array = array('High', 'Medium', 'Low')),
        'completed' => false,
        'user_id'=> User::all()->random()->id
    ];
});
