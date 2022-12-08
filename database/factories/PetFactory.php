<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pet;
use Faker\Generator as Faker;

$factory->define(Pet::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'color' => $faker->colorName,
        'birth_date' => $faker->date('Y-m-d',now()),
        'person_id' => $faker->numberBetween(1,100)
    ];
});
