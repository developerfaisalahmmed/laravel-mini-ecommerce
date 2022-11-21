<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['invoice','total_qty','payable_price','user_id','payment_status','shipping_address_id'];


    public function order_details(){
        return $this->hasMany(OrderDetails::class,'invoice_id','invoice');
    }

    public function user_details(){
        return $this->hasOne(User::class,'id','user_id');
    }

}
