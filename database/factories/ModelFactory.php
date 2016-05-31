<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'user_name' => $faker->username,
        'password' => bcrypt(12345678),
        'full_name' => $faker->name,
        'email' => $faker->safeEmail,
        'status' => 1,
        'remember_token' => str_random(10),
    ];
});
