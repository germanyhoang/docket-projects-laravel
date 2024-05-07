<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['id','have_view','price','created_at','update_at','room_role_id','resident_id'];

    public function resident(): BelongsTo
    {
        return $this->belongsTo(Resident::class);
    }
    public function roomBillForTours(): HasMany
    {
        return $this->hasMany(RoomBillForTour::class);
    }
    public function roomDetailImages(): HasMany
    {
        return $this->hasMany(RoomDetailImage::class);
    }
    public function room() {
        $this->room = RoomRole::values($this->room_role_id);
        return $this;
    }
}
