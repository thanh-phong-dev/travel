<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhongKhachSan extends Model
{
    //
      protected $table ="phongkhachsan";
      
      public function khachsan()
      {
        return $this->belongsTo('App\KhachSan','idkhachsan','id');
      }
      

}
