<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusRole extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status_role')->insert([
            [
                'id' => 1,
                'status' => 'chờ phê duyệt',
            ],
            [
                'id' => 2,
                'status' => 'đã phê duyệt',
            ],
            [
                'id' => 3,
                'status' => 'đã hoàn thành tour',
            ],
            [
                'id' => 4,
                'status' => 'đã huỷ',
            ]
            ]);
    }
}
