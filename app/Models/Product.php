<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','detail','price','image','category','status','discount','user_id'];

    public function comment(){
        return $this->hasMany('App\Models\Comment');
    }

    public function discount(){
        return $this->belongsTo('App\Models\Discount');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function user(){
        return $this->hasMany('App\Models\User');
    }

    public function payment(){
        return $this->blongsTo('App\Models\Payment');
    }
}
