<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class HotelRating
{
    public static function values($id) {
        $array = [
            1 => '1 sao',
            2 => '2 sao',
            3 => '3 sao',
            4 => '4 sao',
            5 => '5 sao'
        ];
        return $array[$id];
    }
}