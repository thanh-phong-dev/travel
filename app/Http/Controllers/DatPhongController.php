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
    $datphong=DatPhong::find($id);
    return view ('admin.datphong.xem',['datphong'=> $datphong]);
  }

  function getSua($id)
  {
    $datphong=DatPhong::find($id);
    return view('admin.datphong.sua',['datphong'=>$datphong]);
  }

  function postSua(Request $request,$id)
  {
    $DatPhong= DatPhong::find($id);
    $DatPhong->TinhTrang=$request->TinhTrang;
    $DatPhong->Idkhachsan=$request->idkhachsan;
    $DatPhong->NgayDat=$request->NgayDat;
    $DatPhong->NgayTra=$request->NgayTra;
    $DatPhong->SoNgayO=$request->SoNgayO;
    $DatPhong->LoaiPhong=$request->LoaiPhong;
    $DatPhong->ThanhTien=$request->ThanhTien;
    $DatPhong->Email=$request->Email;
    $DatPhong->SoDienThoai=$request->SDT;
    $DatPhong->save();
    return redirect('admin/datphong/danhsach');
  }
}
