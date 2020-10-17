<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['product_id','user_id','status','code_cart'];

    public function payment(){
        return $this->blongsTo('App\Models\Payment');
    }

    public function user(){
        return $this->blongsTo('App\Models\User');
    }

    public function product(){
        return $this->hasMany('App\Models\Product');
    }

    public function discount(){
        return $this->blongsTo('App\Models\Discount');
    }
}
