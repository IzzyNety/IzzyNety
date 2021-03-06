<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {

    $title = $faker->realText(rand(10, 40));
    $short_title = mb_strlen($title)>30 ? mb_substr($title, 0, 30) . '...' : $title;
    $descr = $faker->realText(rand(100, 500));
    $short_descr = mb_strlen($descr)>100 ? mb_substr($descr, 0, 100) . '...' : $descr;
    $created = $faker->dateTimeBetween('-30 days', '-1 days');

    return [
        'title' => $title,
        'short_title' => $short_title,
        'author_id' => rand(1, 4),
        'descr' => $descr,
        'short_descr'=> $short_descr,
        'created_at' => $created,
        'updated_at' => $created,
    ];
});
