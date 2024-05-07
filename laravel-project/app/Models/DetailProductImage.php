<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProductImage extends Model
{
    use HasFactory;
    protected $fillable = ['id','link_image','created_at','update_at','product_id'];
    
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
