<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = ['product_name','product_id','user_id','product_price','number_product','discount_id','total_price'];

    public function product(){
        return $this->hasMany('App\Models\Product');
    }
}
