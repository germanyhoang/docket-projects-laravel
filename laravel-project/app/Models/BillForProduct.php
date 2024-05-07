<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillForProduct extends Model
{
    use HasFactory;

    protected $fillable = ['id','totel_price','created_at','update_at','user_id'];

    public function productBillForProducts(): HasMany
    {
        return $this->hasMany(ProductBillForProduct::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
