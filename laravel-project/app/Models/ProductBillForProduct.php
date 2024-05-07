<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBillForProduct extends Model
{
    use HasFactory;
    protected $fillable = ['id','quantity','created_at','update_at','bill_for_product_id','product_id'];
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    public function billForProduct(): BelongsTo
    {
        return $this->belongsTo(BillForProduct::class);
    }
}
