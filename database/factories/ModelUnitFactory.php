<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Unit;
use Faker\Generator as Faker;

$factory->define(Unit::class, function (Faker $faker) {
    return [
        'unit_id' => $faker->unique()->numberBetween(100, 108),
        'unit_name' => $faker->word(),
        'unit_description' => $faker->name()
    ];
});
