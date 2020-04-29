<?php

use Illuminate\Database\Seeder;
use App\AdsAkun;

class AdsAkunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdsAkun::insert([
            [
                'nama_akun' => 'Akun A',
            ], 
            [
                'nama_akun' => 'Akun B',
            ]
        ]);
    }
}
