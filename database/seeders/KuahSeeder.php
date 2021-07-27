<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kuah;

class KuahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kuah::insert([
            [
                'id' => 1,
                'nama' => 'Shio'
            ],
            [
                'id' => 2,
                'nama' => 'Miso'
            ],
            [
                'id' => 3,
                'nama' => 'Kari'
            ],
        ]);
    }
}
