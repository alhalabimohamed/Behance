<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\User::class, function (Faker $faker) {
    return [

        'firstName' => $faker->firstName,
        'email' => $faker->email,

        //'email_verified_at' => $faker->companyEmail,
        'password' => $faker->password(),



    ];
});
