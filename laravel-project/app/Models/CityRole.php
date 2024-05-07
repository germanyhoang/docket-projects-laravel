<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CityRole
{
    public static function values($id) {
        $array = [
            1 => 'Hà Nội',
            2 => 'Bắc Ninh',
            3 => 'Hải Dương',
            4 => 'Hà Nam',
            5 => 'Ninh Bình',
            6 => 'Thanh Hoá'
        ];
        return $array[$id];
    }
}