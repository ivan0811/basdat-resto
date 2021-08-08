<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::insert([
            [
                'id' => 1,
                'detail_id' => 1,
                'level' => 1
            ],
            [
                'id' => 2,
                'detail_id' => 1,
                'level' => 2
            ],            
            [
                'id' => 3,
                'detail_id' => 3,
                'level' => 3
            ],           
            [
                'id' => 4,
                'detail_id' => 5,
                'level' => 4
            ],                       
            [
                'id' => 5,
                'detail_id' => 5,
                'level' => 0
            ],             
        ]);
    }
}
