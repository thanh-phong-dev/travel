<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietDienDan extends Model
{
    //
      protected $table ="chitietdiendan";

      public function diendan()
      {
        return $this->belongsTo('App\DienDan','idDienDan','id');
      }
      public function user()
      {
        return $this->belongsTo('App\User','idUser','id');
      }
      public function comment()
      {
        return  $this->hasMany('App\Comment','idDienDan','id');
      }
     
}
