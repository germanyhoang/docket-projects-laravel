<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusRole
{
    public static function values($id) {
        $array = [
            1 => 'chờ phê duyệt',
            2 => 'da phe duyet',
            3 => 'da hoan thanh',
            4 => 'da huy'
        ];
        return $array[$id];
    }
}

