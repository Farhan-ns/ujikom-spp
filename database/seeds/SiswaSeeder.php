<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            'nisn' => 1123456789,
            'nis' => 1171332112,
            'password' => bcrypt('secret'),
            'nama' => 'Otto Sitorus',
            'alamat' => 'Jr. Krakatau No. 353, Tidore Kepulauan 83527, Bandung',
            'no_telpon' => '(+62) 560 8221 899', 
            'spp_id' => 1,
            'kelas_id' => 1
        ]);
    }
}
