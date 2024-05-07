<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourBillForTour extends Model
{
    use HasFactory;

    protected $fillable = ['id','created_at','update_at','bill_for_tour_id','tour_id'];

    public function billForTours(): BelongsTo{
        return $this->belongsTo(BillForTour::class);
    }
    public function Tours(): BelongsTo{
        return $this->belongsTo(Tour::class);
    }
}
