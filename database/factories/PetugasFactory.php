<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Petugas;
use Faker\Generator as Faker;

$factory->define(Petugas::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\id_ID\Person($faker));

    return [
        'username' => $faker->username,
        'password' => bcrypt('secret'),
        'nama_petugas' => $faker->name,
        'level' => $faker->randomElement(['admin', 'petugas'])
    ];
});
