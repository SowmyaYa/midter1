<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement($array = array('Ford','Honda','Toyota')),
        'Model' => $faker->name,
        'Year' => $faker->name,
    ];
});
