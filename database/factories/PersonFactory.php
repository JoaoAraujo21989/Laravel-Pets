<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'address_id' => $faker->unique()->numberBetween(1,100),
        'name' => $faker->name,
        'birth_date' => $faker->date('Y-m-d',now()),
        'email' => $faker->unique()->safeEmail,
    ];
});
