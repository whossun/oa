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

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'username' => $faker->name,
        'realname' => $faker->name,
        'avatar'   => $faker->imageUrl(200, 200),
        'phone'    => $faker->phoneNumber,
        'sex'      => $faker->randomElement(array('男', '女', '保密')),
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
