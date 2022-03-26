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
                'name' => 'Jefferson Francisco',
                'lastname' => 'Pineda Quintanilla',
                'email' => 'fjeffersonpineda@hotmail.com',
                'created_at' => now(),
                'updated_at' => now(),
                'password' => Hash::make('12345678'),
            ],
            [
                'id' => 2,
                'name' => 'Kenia Iveth',
                'lastname' => 'Ortega Rodriguez',
                'email' => 'kivethortega@hotmail.com',
                'created_at' => now(),
                'updated_at' => now(),
                'password' => Hash::make('12345678'),
            ]
        ]);
    }
}
