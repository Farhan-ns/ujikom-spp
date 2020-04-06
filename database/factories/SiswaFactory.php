<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Siswa;
use Faker\Generator as Faker;

$factory->define(Siswa::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\id_ID\Person($faker));
    $faker->addProvider(new \Faker\Provider\id_ID\Address($faker));
    $faker->addProvider(new \Faker\Provider\id_ID\PhoneNumber($faker));

    return [
        'nisn' => $faker->unique()->numerify('0#########'),
        'nis' => $faker->unique()->numerify('0#########'),
        'password' => bcrypt('secret'),
        'nama' => $faker->name,
        'alamat' => $faker->address,
        'no_telpon' => $faker->phoneNumber,
        'kelas_id' => function() {
            return factory('App\Kelas')->create()->id;
        },
        'spp_id' => function() {
            return factory('App\SPP')->create()->id;
        }
    ];
});
