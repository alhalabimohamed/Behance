<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\video::class, function (Faker $faker) {
    return [



        'lastname' => $faker->lastName,

        'path' => $faker->text(),
        'description' => $faker->name,
    ];
});
