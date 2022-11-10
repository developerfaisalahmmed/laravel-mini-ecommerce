<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug','price','quantity','discount_type','discount','selling_price','description','image'];

    public function products_category(){
        return $this->belongsToMany(Category::class,'category_products','product_id')->orderBy('id','DESC');;
    }


}
