<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kelas;
use Faker\Generator as Faker;

$factory->define(Kelas::class, function (Faker $faker) {
    return [
        'nama_kelas' => $faker->randomElement(['XII RPL 1', 'XII RPL 2', 'XI RPL 1', 'X RPL 1']),
        'kompetensi_keahlian' => 'RPL'
    ];
});
