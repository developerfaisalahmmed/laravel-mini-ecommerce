<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = ['product_id','user_id'];


    public function wishlistList(){
        return $this->hasOne(Product::class,'id','product_id');
    }


}
