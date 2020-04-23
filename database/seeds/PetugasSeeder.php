<?php

use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('petugas')->insert([
            'username' => 'rachel.st',
            'password' => bcrypt('secret'),
            'nama_petugas' => 'Rachel Andriani S',
            'level' => 'admin'
        ]);
    }
}
