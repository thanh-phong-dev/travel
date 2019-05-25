<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhMucAnUong extends Model
{
    //
      protected $table ="DanhMucAnUong";
         public function tintucanuong()
         {
            return $this->hasMany('App\DiaDiemAnUong','idDanhMuc','id');
         }
    
}
