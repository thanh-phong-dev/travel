<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachSan extends Model
{
    //
      protected $table ="khachsan";
      
      public function phongkhachsan1()
      {
        return  $this->hasMany('App\PhongKhachSan','idkhachsan','id');
      }

      public function comment()
      {
        return  $this->hasMany('App\Comment','idKhachSan','id');
      }

   
}
