<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Person;
use Faker\Generator as Faker;
use App\Model\Unit;

$factory->define(Person::class, function (Faker $faker) {

    $units = Unit::all()->pluck('unity_id')->toArray();
    for ($i = 0; $i < 10; $i++) {
        $unity_id = $faker->randomElement($units);

        /*Match::create([
            'unity_id' => $unity_id,
        ]);*/
    }

    return [
        'masp' => $faker->unique()->numberBetween(1000000, 1799999),
        'name' => $faker->name(),
        'is_active' => $faker->randomElement(['yes', 'no']),
        'cpf' => $faker->unique()->numberBetween(10000000000, 17999999999),
        'rg' => $faker->unique()->numberBetween(11111111, 29999999),
        'is_accredited' => $faker->randomElement(['yes', 'no']),
        'driver_category' => $faker->randomElement(['A', 'B', 'C', 'D', 'E']),
        'gender' => $faker->randomElement(['F', 'M']),
        'birth_date' => $faker->dateTimeBetween($startDate = '-40 years', $endDate = '-19 years', $timezone = null),
        'inclusion_date' => $faker->dateTimeThisDecade($max="now"),
        'occupation' => $faker->randomElement(['QPBM', 'QPEBM', 'QOBM', 'QOEBM']),
        'level' => $faker->randomElement(['Civil', 'SD', 'SGT', 'TEN', 'CAP']),
        'functional_situation' => $faker->randomElement(['ATIVIDADE FIM NA SEDE', 'ATIVIDADE FIM DESTACADO', 'ATIVIDADE MEIO']),
        'unit_id' => $faker->numberBetween(100, 108)
    ];
});
