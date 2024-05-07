<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;

    protected $fillable = ['id','name','address','thumbnail_image','created_at','update_at','role_resident_id','hotel_rating'];

    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }
    public function tours(): HasMany
    {
        return $this->hasMany(Tour::class);
    }

    public function resident() {
        $this->resident = RoleResident::values($this->role_resident_id);
        return $this;
    }

    public function rating() {
        $this->rating = HotelRating::values($this->hotel_rating);
        return $this;
    }
}
