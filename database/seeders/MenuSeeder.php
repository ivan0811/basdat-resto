<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::insert([
            [
                'id' => 1,
                'kategori' => 'makanan',
                'nama' => 'Shio',
                'harga' => 15000
            ],
            [
                'id' => 2,
                'kategori' => 'makanan',
                'nama' => 'Shoyu',
                'harga' => 20000
            ],
            [
                'id' => 3,
                'kategori' => 'makanan',
                'nama' => 'Miso',
                'harga' => 25000
            ],
            [
                'id' => 4,
                'kategori' => 'minuman',
                'nama' => 'Air Putih',
                'harga' => 3000
            ],
            [
                'id' => 5,
                'kategori' => 'minuman',
                'nama' => 'Teh Manis',
                'harga' => 3000
            ]
        ]);
    }
}
