<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityRole extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('city_role')->insert([
            [
                'id' => 1,
                'city' => 'Hà Nội'
            ],
            [
                'id' => 2,
                'city' => 'Bắc Ninh'
            ],
            [
                'id' => 3,
                'city' => 'Hải Dương'
            ],
            [
                'id' => 4,
                'city' => 'Hà Nam'
            ],
            [
                'id' => 5,
                'city' => 'Ninh Bình'
            ],
            [
                'id' => 6,
                'city' => 'Thanh Hoá'
            ]
        ]);
    }
}
