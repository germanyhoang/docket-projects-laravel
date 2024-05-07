<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class RoleResident
{
    public static function values($id) {
        $array = [
            1 => 'nhà nghỉ',
            2 => 'homestay',
            3 => 'hotel'
        ];
        return $array[$id];
    }
}