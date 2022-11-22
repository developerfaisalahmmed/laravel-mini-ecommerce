<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;


    protected $fillable = ['order_id','invoice_id','product_id','price','quantity','discount_type','discount','ask_price','user_id','shipping_address_id'];



    public function order_product_details(){
        return $this->hasOne(Product::class,'id','product_id');
    }

    public function order_product_image_details(){
        return $this->hasOne(ProductImage::class,'product_id','product_id');
    }



}
