<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function category_products(){
        return $this->belongsToMany(Product::class,'category_products','category_id');
    }

    public function product_images(){
        return $this->hasMany(ProductImage::class,'product_id');
    }
}
