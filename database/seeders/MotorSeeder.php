<?php

namespace Database\Seeders;

use App\Models\Motor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Motor::create([
            'name' => 'Andi',
            'motorcycle' => 'Beat',
            'model' => 'Honda',
            'rental_time' => 3,
            'rental_price' => 150000.00,
            'returned' => false
        ]);
    }
}
