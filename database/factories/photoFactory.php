<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\photo::class, function (Faker $faker) {
    return [


        //'firstName' => $faker->title,
        'lastname' => $faker->lastName,
    ];
});
