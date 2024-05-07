<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransportationMethod extends Model
{
    use HasFactory;

    protected $fillable = ['id','is_seat','is_couple','price','created_at','updated_at','seat_quantity_role_id'];

    public function transportationMethodBillForTours(): HasMany{
        return $this->hasMany(TransportationMethodBillForTour::class);
    }
    public function tours(): HasMany{
        return $this->hasMany(Tour::class);
    }
    public function seat() {
        $this->seat = SeatQuantityRole::values($this->seat_quantity_role_id);
        return $this;
    }
}
