<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleResident extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('role_resident')->insert([
            [
                'id' => 1,
                'resident' => 'nhà nghỉ'
            ],
            [
                'id' => 2,
                'resident' => 'homestay'
            ],
            [
                'id' => 3,
                'resident' => 'hotel'
            ]
            ]);
    }
}
