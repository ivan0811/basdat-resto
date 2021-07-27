<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KuahDetail;
class KuahDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KuahDetail::insert([
            [
                'kuah_id' => 3,
                'detail_id' => 1
            ],
            [
                'kuah_id' => 1,
                'detail_id' => 3
            ],
            [
                'kuah_id' => 2,
                'detail_id' => 5
            ]
        ]);
    }
}
