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
use App\Http\Controllers\PostsController;
use Carbon\Carbon;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->words(5, true),
        'body' => $faker->text(600),
        'cover_image' => $faker->text(100),
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'category_id' => function () {
            return factory(App\Category::class)->create()->id;
        }
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->words(1, true),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});