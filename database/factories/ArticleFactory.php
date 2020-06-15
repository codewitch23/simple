<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Article::class, function (Faker $faker) {
    return [
        'user_id'=>factory('App\User'),
        'title'=>$faker->sentence(),
        'excerpt'=>$faker->sentence(),
        'body'=>$faker->paragraph()
    ];
});
