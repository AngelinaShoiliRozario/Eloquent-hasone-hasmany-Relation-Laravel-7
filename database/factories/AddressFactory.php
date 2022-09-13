<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define('App\Address', function (Faker $faker) {
    return [
        'country' => $faker->country,
        'city' => $faker->city,
        'user_id' => App\User::all()->random()->id, 
    ];
});
