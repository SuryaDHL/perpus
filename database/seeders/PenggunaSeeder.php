<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Create::table('penggunas', [
            'nis' => '1234',
            'fullname' => 'Surya',
            'username' => 'surya_dhl',
            'password' => bcrypt('12345'),
            'kelas' => 'XI RPL B',
            'alamat' => 'Kayu Tangi',
        ]);
    }
}
