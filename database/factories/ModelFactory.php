<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Author;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
// NOTE depreacted style (maybe?)
$factory->define(Author::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'github' => $faker->unique()->name,
        'twitter'=> $faker->unique()->name,
        'location' => $faker->address,
        'mobile' => $faker->phoneNumber,
        'latestArticlePublished' => $faker->realText,
    ];
});

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->email,
        'password' => password_hash('123456', PASSWORD_BCRYPT),
    ];
});
