<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $fillable = ['name','slug','image'];


    public function category_products(){
        return $this->belongsToMany(Product::class,'category_products','category_id')->orderBy('id','DESC');;
    }





}
