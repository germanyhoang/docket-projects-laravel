<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusStation extends Model
{
    use HasFactory;

    protected $fillable = ['id','name','address','created_at','updated_at','city_role_id'];

    public function tourBusStations(): HasMany{
        return $this->hasMany(TourBusStation::class);
    }
    
    public function city() {
        $this->city = CityRole::values($this->city_role_id);
        return $this;
    }
}
