<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','detail','price','image','category_id','status','discount_id','user_id'];

    public function comment(){
        return $this->hasMany('App\Models\Comment');
    }

    public function discount(){
        return $this->belongsTo('App\Models\Discount');
    }

    public function category(){
        return $this->hasMany('App\Models\Category');
    }

    public function payment(){
        return $this->hasMany('App\Models\Payment');
    }

    public function cart(){
        return $this->blongsToMany('App\Models\Cart');
    }
}
