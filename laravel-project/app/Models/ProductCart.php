<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCart extends Model
{
    use HasFactory;
    protected $fillable = ['id','quantity','created_at','update_at','product_id','cart_id'];
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    public function cart():BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }
}
