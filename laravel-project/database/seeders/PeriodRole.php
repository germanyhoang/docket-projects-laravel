<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodRole extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('period_role')->insert([
            [
                'id' => 1,
                'period' => '2 ngày 1 đêm'
            ],
            [
                'id' => 2,
                'period' => '3 ngày 2 đêm'
            ],
            [
                'id' => 3,
                'period' => '1 tuần'
            ],
        ]);
    }
}
