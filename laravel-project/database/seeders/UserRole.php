<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRole extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_role')->insert([
            [
                'id' => 1,
                'account' => 'admin'
            ],
            [
                'id' => 2,
                'account' => 'client'
            ]
        ]);
    }
}
