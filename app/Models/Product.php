<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public function product_images(){
        return $this->hasMany(ProductImage::class);
    }


    public function products_category(){
        return $this->belongsToMany(Category::class,'category_products','product_id');
    }


}
