<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Unity;
use Faker\Generator as Faker;

$factory->define(Unity::class, function (Faker $faker) {
    return [
        'unity_name' => $faker->name(),
        'unity_description' => $faker->word()
    ];
});
