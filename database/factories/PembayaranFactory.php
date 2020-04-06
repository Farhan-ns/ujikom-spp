<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pembayaran;
use Faker\Generator as Faker;

$factory->define(Pembayaran::class, function (Faker $faker) {
    return [
        'tgl_bayar' => now(),
        'bulan_dibayar' => $faker->monthName,
        'tahun_dibayar' => $faker->year,
        'jumlah_dibayar' => 300000,
        'siswa_id' => function () {
            return factory('App\Siswa')->create()->nisn;
        },
        'petugas_id' => function() {
            return factory('App\Petugas')->create()->id;
        }
    ];
});
