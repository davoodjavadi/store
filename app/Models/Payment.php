<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = ['discount_id','status','cart_id','total_price'];

    public function product(){
        return $this->blongsToMany('App\Models\Product');
    }

    public  function cart(){
        return $this->hasOne('App\Models\Cart');
    }

    public function user(){
        return $this->blongsTo('App\Models\User');
    }

    public function discount(){
        return $this->blongsTo('App\Models\Discount');
    }

}
