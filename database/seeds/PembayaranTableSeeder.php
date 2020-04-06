<?php

use Illuminate\Database\Seeder;

class PembayaranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Pembayaran', 2)->create();
            // ->each(function ($pembayaran) {
            //     $pembayaran->siswa()->save(factory('App\Siswa')->make());
            //     $pembayaran->petugas()->save(factory('App\Petugas')->make());
            // });
    }
}
