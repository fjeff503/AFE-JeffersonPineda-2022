<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::insert([
            [
                'id' => 1,
                'name' =>  'Ahuachapán',
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'name' =>  'Santa Ana',
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'name' =>  'Sonsonate',
                'created_at' => now(),
            ],
            [
                'id' => 4,
                'name' =>  'La Libertad',
                'created_at' => now(),
            ],
            [
                'id' => 5,
                'name' =>  'Chalatenango',
                'created_at' => now(),
            ],
            [
                'id' => 6,
                'name' =>  'San Salvador',
                'created_at' => now(),
            ],
            [
                'id' => 7,
                'name' =>  'Cuscatlán',
                'created_at' => now(),
            ],
            [
                'id' => 8,
                'name' =>  'La Paz',
                'created_at' => now(),
            ],
            [
                'id' => 9,
                'name' =>  'Cabañas',
                'created_at' => now(),
            ],
            [
                'id' => 10,
                'name' =>  'San Vicente',
                'created_at' => now(),
            ],
            [
                'id' => 11,
                'name' =>  'Usulután',
                'created_at' => now(),
            ],
            [
                'id' => 12,
                'name' =>  'Morazán',
                'created_at' => now(),
            ],
            [
                'id' => 13,
                'name' =>  'San Miguel',
                'created_at' => now(),
            ],
            [
                'id' => 14,
                'name' =>  'La Unión',
                'created_at' => now(),
            ],
        ]);
    }
}
