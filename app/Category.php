<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function user() {
      return $this->belongsTo('App\User');
    }

    public function subcategories() {
      return $this->hasMany('App\Subcategory');
    }

  public function products()
  {
    return $this->hasManyThrough('App\Product','App\Subcategory', 'category_id', 'subcategory_id');
  }

}
