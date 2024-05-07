<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourGuide extends Model
{
    use HasFactory;

    protected $fillable = ['id','name','age','description','created_at','updated_at'];

    public function Tours(): HasMany{
        return $this->hasMany(Tour::class);
    }
}
