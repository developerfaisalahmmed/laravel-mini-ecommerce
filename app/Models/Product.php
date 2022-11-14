<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug','price','quantity','discount_type','discount','selling_price','description','image'];

    public function products_category(){
        return $this->belongsToMany(Category::class,'category_products','product_id')->orderBy('id','DESC');
    }


    public function productImages(){
        return $this->hasMany(ProductImage::class,'product_id','id');
    }

    public function first_image() {
        return $this->productImages()->take(1);
    }


    public function categoryProduct(){
        return $this->hasMany(CategoryProduct::class,'product_id' , 'id');
    }

    public function categories(){
        return $this->belongsToMany(Category::class,'category_products','product_id');
    }

}
