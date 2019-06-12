<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\GioiThieu;
use App\QuangCao;

use Illuminate\Routing\Controller;

class GioiThieuController extends Controller
{
    //
    public function getDanhSach()
    {
      $gioithieu = GioiThieu::all();
      return view ('admin.gioithieu.danhsach',['gioithieu'=> $gioithieu]
    );
    }

    public function getThem()
    {
      return view('admin.gioithieu.them');
    }
    public function postThem(Request $request)
    {
    $gioithieu =new GioiThieu();
    $gioithieu->Ten= $request->Ten;
    $gioithieu->ChucVu= $request->chucvu;
    if($request->hasFile('Hinh'))
    {
      $file=  $request->file('Hinh');
      $name=  $file->getClientOriginalName();
      $Hinh=  str_random(4)."_".$name;
      while (file_exists("upload/gioithieu/".$Hinh))
        {
          $Hinh =str_random(4)."_". $name;
        }
        // code...
        $file->move("upload/gioithieu", $Hinh);
        $gioithieu->Hinh=$Hinh;
    }
    else {
      $gioithieu->Hinh="";
    }
    $gioithieu->save();
    return redirect('admin/gioithieu/danhsach')->with('thongbao','Thêm Thành Công');
    }

    public function getSua($id)
    {
        $gioithieu = GioiThieu::find($id);
        return view ('admin.gioithieu.sua',['gioithieu'=> $gioithieu]);
    }
    public function postSua(Request $request,$id)
    {
        $gioithieu =new GioiThieu();
        $gioithieu->Ten= $request->Ten;
        $gioithieu->ChucVu= $request->chucvu;
     if($request->hasFile('Hinh'))
     {
       $file=  $request->file('Hinh');
       $name=  $file->getClientOriginalName();
       $Hinh=  str_random(4)."_".$name;
       while (file_exists("upload/gioithieu/".$Hinh))
         {
           $Hinh =str_random(4)."_". $name;
         }
         // code...
         $file->move("upload/gioithieu", $Hinh);
        
         $gioithieu->Hinh=$Hinh;
     }

     $gioithieu->save();
     return redirect('admin/gioithieu/danhsach');
     }
    public function getXoa($id)
    {
      $gioithieu =GioiThieu:: find($id);
      $gioithieu->delete();
     
      return redirect('admin/gioithieu/danhsach')->with('thongbao','Xóa Thành Công');
    }

}
