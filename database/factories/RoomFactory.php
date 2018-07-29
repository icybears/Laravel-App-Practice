<?php

use Faker\Generator as Faker;

$factory->define(App\Room::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'description' => $faker->paragraph('2'),
        'user_id' => 99999,
    ];
});
