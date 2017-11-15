<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function user() {
      return $this->belongsTo('App\User');
    }
    public function subcategory(){
      return $this->belongsTo('App\Category');
    }
    public function category() {
      return $this->hasManyThrough('App\Subcategory','App\Category','id');
    }


}
