<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaksi;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaksi::insert([
            [
                'kd_transaksi' => 'tr00001',
                'pegawai_id' => 4,
                'total_harga' => 28000,
                'pajak' => 0,
                'bayar' => 30000
            ],
            [
                'kd_transaksi' => 'tr00002',
                'pegawai_id' => 4,
                'total_harga' => 36000,
                'pajak' => 0,
                'bayar' => 50000
            ],
            [
                'kd_transaksi' => 'tr00003',
                'pegawai_id' => 4,
                'total_harga' => 69000,
                'pajak' => 0,
                'bayar' => 100000
            ]           
        ]);        
    }
}
