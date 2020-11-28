<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\contact::class, function (Faker $faker) {
    return [

        'Messages' => $faker->text,
        'Topic' => $faker->title,
    ];
});
