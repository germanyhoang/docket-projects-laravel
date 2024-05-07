<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['id','product_id','created_at','updated_at','user_id'];
    public function productCarts(): HasMany{
        return $this->hasMany(ProductCart::class);
    }
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
