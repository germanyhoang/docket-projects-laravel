<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = ['id','title','price','post_content','created_at','update_at','transportation_method_id','resident_id','tour_guide_id','period_role_id'];

    public function tourBusStations(): HasMany{
        return $this->hasMany(TourBusStation::class);
    }
    public function tourBillForTours(): HasMany{
        return $this->hasMany(TourBillForTour::class);
    }
    public function tourGuide(): BelongsTo{
        return $this->belongsTo(TourGuide::class);
    }
    public function resident(): BelongsTo{
        return $this->belongsTo(Resident::class);
    }
    public function transportationMethod(): BelongsTo{
        return $this->belongsTo(TransportationMethod::class);
    }
    public function period() {
        $this->period = StatusRole::values($this->period_role_id);
        return $this;
    }

}
