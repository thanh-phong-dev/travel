<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatPhong extends Model
{
    //
      protected $table ="hoadondatphong";
      public function phong()
      {
        return $this->belongsTo('App\KhachSan','Idkhachsan','id');
      }

      public function tintuc()
      {
        return $this->hasManyThrough('App\KhachSan','App\PhongKhachSan','idkhachsan','id','Idkhachsan');
      }
}
