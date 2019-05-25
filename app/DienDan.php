<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DienDan extends Model
{
    //
      protected $table ="diendan";

   
      public function comment()
      {
        return  $this->hasMany('App\Comment','iddiendan','id');
      }
}
