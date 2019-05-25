<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table ="Comment";

    public function tintuc()
    {
      return $this->belongTo('App\TinTuc','idTinTuc','id');

    }
    public function khachsan()
    {
      return $this->belongTo('App\KhachSan','idKhachSan','id');
    }
    public function diendan()
    {
      return $this->belongTo('App\DienDan','iddiendan','id');
    }

    public function user()
    {
      return $this->belongsTo('App\User','idUser','id');
    }
}
