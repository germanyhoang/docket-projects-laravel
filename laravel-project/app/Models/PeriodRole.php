<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodRole extends Model
{
    use HasFactory;
}
class PeriodRole
{
    public static function values($id) {
        $array = [
            1 => '2 ngày 1 đêm',
            2 => '3 ngày 2 đêm',
            3 => '1 tuần'
        ];
        return $array[$id];
    }
}