<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StatusRole;
use App\Enums\UserRole;
class BillForTour extends Model
{
    use HasFactory;

    protected $fillable = ['id','tour_price','tour_id','created_at','update_at','user_id','status_role_id'];

    // protected $casts = [
    //     'status_role_id' => StatusRole::values($this->status_role_id)
    // ];
    
    public function status() {
        $this->status = StatusRole::values($this->status_role_id);
        return $this;
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function transportationMethodBillForTours(): HasMany{
        return $this->hasMany(TransportationMethodBillForTour::class);
    }

    public function roomBillForTours(): HasMany{
        return $this->hasMany(RoomBillForTour::class);
    }

    public function tourBillForTours(): HasMany{
        return $this->hasMany(TourBillForTour::class);
    }

    // public function statusRole(): BelongsTo{
    //     return $this->belongsTo(StatusRole::class);
    // }
}
