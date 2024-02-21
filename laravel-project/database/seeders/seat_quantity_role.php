<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seat_quantity_role extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('seat_quantity_role')->insert([
            [
                'id' => 1,
                'seat' => '16 chỗ',
            ],
            [
                'id' => 2,
                'seat' => '32 chỗ',
            ],
            [
                'id' => 3,
                'seat' => '45 chỗ',
            ]
        ]);
        
    }
}
