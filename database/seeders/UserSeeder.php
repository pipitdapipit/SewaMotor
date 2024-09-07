<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        User::create([
            'username' => 'David',
            'email' => 'david@gmail.com',
            'password' => Hash::make('david123'),
            'phone_num' => '082123456789',
            'city' => 'Jakarta',
        ]);

        User::create([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'phone_num' => '082198765432',
            'city' => 'Bogor',
            'role' => 'admin',
        ]);
    }
}
