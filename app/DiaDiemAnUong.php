<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaDiemAnUong extends Model
{
    //
    protected $table ="diadiemanuong";

    public function danhmucanuong()
    {
      return $this->belongsTo('App\DanhMucAnUong','idDanhMuc','id');
    }
}
