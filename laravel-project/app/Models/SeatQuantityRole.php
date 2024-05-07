<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatQuantityRole extends Model
{
    use HasFactory;
}
class SeatQuantityRole
{
    public static function values($id) {
        $array = [
            1 => '16 chỗ',
            2 => '32 chỗ',
            3 => '45 chỗ'
        ];
        return $array[$id];
    }
}