<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DetailTransaksi;

class DetailTransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailTransaksi::insert([
            [
                'id' => 1,
                'kd_transaksi' => 'tr00001',
                'menu_id' => 3,
                'qty' => 1
            ],
            [
                'id' => 2,
                'kd_transaksi' => 'tr00001',
                'menu_id' => 4,
                'qty' => 1
            ],
            [
                'id' => 3,
                'kd_transaksi' => 'tr00002',
                'menu_id' => 1,
                'qty' => 2
            ],
            [
                'id' => 4,
                'kd_transaksi' => 'tr00002',
                'menu_id' => 5,
                'qty' => 2
            ],
            [
                'id' => 5,
                'kd_transaksi' => 'tr00003',
                'menu_id' => 2,
                'qty' => 3
            ],
            [
                'id' => 6,
                'kd_transaksi' => 'tr00003',
                'menu_id' => 5,
                'qty' => 3
            ],
        ]);
    }
}
