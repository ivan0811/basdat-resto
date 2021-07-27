<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            PegawaiSeeder::class,
            MenuSeeder::class,
            KuahSeeder::class,
            TransaksiSeeder::class,
            DetailTransaksiSeeder::class,
            KuahDetailSeeder::class
        ]);
    }
}
