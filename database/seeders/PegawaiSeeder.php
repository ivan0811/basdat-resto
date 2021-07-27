<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pegawai;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pegawai::insert([
            [
                'id' => 1,
                'user_id' => 2,
                'nama' => 'Ivan Faathirza',
                'alamat' => 'Kuningan, Cilimus, Caracas',
                'no_telp' => '081321265895',
                'jk' => 'L'   
            ],              
            [
                'id' => 2,
                'user_id' => 3,
                'nama' => 'Argya Aulia',
                'alamat' => 'Palembang',
                'no_telp' => '081321265895',
                'jk' => 'L'                
            ],              
            [
                'id' => 3,
                'user_id' => 4,
                'nama' => 'Arsy Opraza',
                'alamat' => 'Pekanbaru',
                'no_telp' => '081321265895',
                'jk' => 'L'               
            ],             
            [
                'id' => 4,
                'user_id' => 5,
                'nama' => 'Fiona Avila',
                'alamat' => 'Padang',
                'no_telp' => '081321265895',
                'jk' => 'P'                
            ],                        
            [
                'id' => 5,
                'user_id' => 6,
                'nama' => 'Muhammad Khatami',
                'alamat' => 'Bandung',
                'no_telp' => '081321265895',
                'jk' => 'L'                
            ],                                
        ]);
    }
}
