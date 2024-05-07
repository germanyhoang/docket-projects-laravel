<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomBillForTour extends Model
{
    use HasFactory;

    protected $fillable = ['id','quantity','created_at','update_at','room_id','bill_for_tour_id'];

    public function billForTour(): BelongsTo
    {
        return $this->belongsTo(BillForTour::class);
    }
    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
}
