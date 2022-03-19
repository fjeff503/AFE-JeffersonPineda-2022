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
        User::insert([
            [
                'id' => 1,
                'name' => 'Jefferson Francisco Pineda Quintanilla',
                'email' => 'fjeffersonpineda@hotmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
            ],
            [
                'id' => 2,
                'name' => 'Kenia Iveth Ortega Rodriguez',
                'email' => 'kivethortega@hotmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
            ]
        ]);
    }
}
