<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomRole extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('room_role')->insert([
            [
                'id' => 1,
                'room' => 'giường đơn'
            ],
            [
                'id' => 2,
                'room' => 'giường đôi'
            ],
            [
                'id' => 3,
                'room' => '2 giường đôi'
            ],
            [
                'id' => 4,
                'room' => 'đặc biệt'
            ],
        ]);
    }
}
