<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

use App\DatPhong;

use Illuminate\Routing\Controller;

class DatPhongController extends Controller
{
  public function getDanhSach()
  {
    $datphong=DatPhong::orderBy('id','DESC')->get();
    return view ('admin.datphong.danhsach',['datphong'=> $datphong]
  );
  }
  public function getXem($id)
  {
    $datphong1=DatPhong::find($id);
    return view ('admin.datphong.xem',['datphong1'=> $datphong1]);
  }



}
