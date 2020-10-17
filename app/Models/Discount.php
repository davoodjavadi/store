<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $fillable = ['name','amount','status','user_id','from_date','to_date'];

    public function product(){
        return $this->hasMany('App\Models\Product');
    }

    public function user(){
        return $this->hasMany('App\Models\User');
    }

    public function payment(){
        return $this->hasMany('App\Models\Payment');
    }

    public function cart(){
        return $this->hasOne('App\Models\Cart');
    }
}
