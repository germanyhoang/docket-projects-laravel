<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','price','description','thumbnail_image','created_at','update_at'];
    public function detailImages(): HasMany
    {
        return $this->hasMany(DetailProductImage::class);
    }
    public function productCarts(): HasMany
    {
        return $this->hasMany(ProductCart::class);
    }
    public function productBillForProducts(): HasMany
    {
        return $this->hasMany(ProductBillForProduct::class);
    }
}
