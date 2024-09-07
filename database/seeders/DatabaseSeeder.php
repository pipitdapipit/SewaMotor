<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    //  $table->id();
    //  $table->string('username');
    //  $table->string('email')->unique();
    //  $table->string('password');
    //  $table->timestamps();

    public function run()
    {
        $this->call([
            MotorSeeder::class,
            UserSeeder::class,
        ]);
    }
}
