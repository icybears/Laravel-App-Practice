<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'user_id' => 99999,
        'room_id' => 99999
    ];
});
