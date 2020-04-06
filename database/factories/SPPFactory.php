<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SPP;
use Faker\Generator as Faker;

$factory->define(SPP::class, function (Faker $faker) {
    return [
        'tahun' => $faker->randomElement([2020, 2019, 2018]),
        'nominal' => $faker->randomElement([300000, 250000, 200000])
    ];
});
