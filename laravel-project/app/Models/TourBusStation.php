<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourBusStation extends Model
{
    use HasFactory;

    protected $fillable = ['id','created_at','update_at','tour_id','bus_station_id'];

    public function tour(): BelongsTo{
        return $this->belongsTo(Tour::class);
    }
    
    public function busStation(): BelongsTo{
        return $this->belongsTo(BusStation::class);
    }

}
