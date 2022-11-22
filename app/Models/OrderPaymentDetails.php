<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPaymentDetails extends Model
{
    use HasFactory;

    protected $fillable = ['order_id','invoice_id','price','payment_method','user_id'];

}
