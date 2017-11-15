<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function product(){
        return $this->belongsTo('App\Product','product_id','id');
    }
    public function payment(){
      return $this->hasOne('App\OrderPayment');
    }
}
