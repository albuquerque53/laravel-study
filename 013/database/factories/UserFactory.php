<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
 * How to use faker:
 * https://github.com/fzaninotto/Faker/blob/master/readme.md
 */

$factory->define(User::class, function (Faker $faker) {
    return [
        // Name will be a random name
        'name' => $faker->name(),
        // Email will be a unique mail
        'email' => $faker->unique()->email,
        // The password will be a random city name
        'password' => bcrypt($faker->city),
        // Token will be a random string with 10 chars
        'remember_token' => Str::random(10)

        // After that add the factory into run() in User Seed
   ];
});
