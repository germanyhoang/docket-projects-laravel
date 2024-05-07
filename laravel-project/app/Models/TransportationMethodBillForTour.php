<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransportationMethodBillForTour extends Model
{
    use HasFactory;

    protected $fillable = ['id','quantity','created_at','updated_at','t_m_id','bill_for_tour_id'];

    public function transportationMethod(): BelongsTo{
        return $this -> belongsTo(TransportationMethod::class, 't_m_id');
    }

    public function billForTour(): BelongsTo{
        return $this -> belongsTo(BillForTour::class);
    }
}
