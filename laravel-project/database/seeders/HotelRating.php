<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelRating extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotel_rating')->insert([
            [
                'id' => 1,
                'rating' => '1 sao'
            ],
            [
                'id' => 2,
                'rating' => '2 sao'
            ],
            [
                'id' => 3,
                'rating' => '3 sao'
            ],
            [
                'id' => 4,
                'rating' => '4 sao'
            ],
            [
                'id' => 5,
                'rating' => '5 sao'
            ],
        ]);
    }
}
