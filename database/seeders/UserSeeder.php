<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'id' => 1,
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'email' => 'admin@localhost.com',
                'role' => 'admin'
            ],
            [                
                'id' => 2,
                'username' => 'ivan',
                'password' => Hash::make('12345678'),
                'email' => 'ivan@localhost.com',
                'role' => 'admin'
            ],
            [                
                'id' => 3,
                'username' => 'argya',
                'password' => Hash::make('12345678'),
                'email' => 'argya@localhost.com',
                'role' => 'admin'
            ],            
            [                
                'id' => 4,
                'username' => 'aras',
                'password' => Hash::make('12345678'),
                'email' => 'aras@localhost.com',
                'role' => 'kasir'
            ],
            [                
                'id' => 5,
                'username' => 'fiona',
                'password' => Hash::make('12345678'),
                'email' => 'fiona@localhost.com',
                'role' => 'kasir'
            ],            
            [                
                'id' => 6,
                'username' => 'tommy',
                'password' => Hash::make('12345678'),
                'email' => 'tommy@localhost.com',
                'role' => 'kasir'
            ],
        ]);
    }
}
