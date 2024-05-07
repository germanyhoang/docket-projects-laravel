<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class RoomRole
{
    public static function values($id) {
        $array = [
            1 => 'giường đơn',
            2 => 'giường đôi',
            3 => '2 giường đôi',
            4 => 'đặc biệt'
        ];
        return $array[$id];
    }
}