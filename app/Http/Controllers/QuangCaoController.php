<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\TheLoai;

use App\QuangCao;

use Illuminate\Routing\Controller;

class QuangCaoController extends Controller
{
    //
    public function getDanhSach()
    {
      $quangcao = QuangCao::all();
      return view ('admin.quangcao.danhsach',['quangcao'=> $quangcao]
    );
    }

    public function getThem()
    {
      return view('admin.quangcao.them');
    }
    public function postThem(Request $request)
    {
    $quangcao =new QuangCao;
    $quangcao->Ten= $request->Ten;
    $quangcao->NoiDung= $request->NoiDung;
    if($request->has('link'))
    $quangcao->link=$request->link;
    if($request->hasFile('Hinh'))
    {
      $file=  $request->file('Hinh');
      $duoi=$file->getClientOriginalExtension();
      if($duoi != 'jpg' && $duoi !='png' && $duoi !='jpeg' )
      {
        return redirect('admin/quangcao/them')->with('loi','Bạn chỉ được tải hình');
      }
      $name=  $file->getClientOriginalName();
      $Hinh=  str_random(4)."_".$name;
      while (file_exists("upload/quangcao/".$Hinh))
        {
          $Hinh =str_random(4)."_". $name;
        }
        // code...
        $file->move("upload/quangcao", $Hinh);
        $quangcao->Hinh=$Hinh;
    }
    else {
      $quangcao->Hinh="";
    }
    $quangcao->save();
    return redirect('admin/quangcao/them')->with('thongbao','Thêm Thành Công');
    }

    public function getSua($id)
    {
      $quangcao = QuangCao::find($id);
        return view ('admin.quangcao.sua',['quangcao'=> $quangcao]);
    }
    public function postSua(Request $request,$id)
    {
      $quangcao= QuangCao::find($id);
      $quangcao->Ten= $request->Ten;
      $quangcao->NoiDung= $request->NoiDung;
      if($request->has('link'))
      $quangcao->link=$request->link;
     if($request->hasFile('Hinh'))
     {
       $file=  $request->file('Hinh');
       $duoi=$file->getClientOriginalExtension();
       if($duoi != 'jpg' && $duoi !='png'&& $duoi !='jpeg' )
       {
         return redirect('admin/quangcao/sua')->with('loi','Bạn chỉ được tải hình');
       }
       $name=  $file->getClientOriginalName();
       $Hinh=  str_random(4)."_".$name;
       while (file_exists("upload/quangcao/".$Hinh))
         {
           $Hinh =str_random(4)."_". $name;
         }
         // code...
         $file->move("upload/quangcao", $Hinh);
         unlink("upload/quangcao/".$quangcao->Hinh);
         $quangcao->Hinh=$Hinh;
     }

     $quangcao->save();
     return redirect('admin/quangcao/sua/'.$id)->with('thongbao','Thêm Thành Công');
     }
    public function getXoa($id)
    {
      $quangcao =QuangCao:: find($id);
      $quangcao->delete();

      return redirect('admin/quangcao/danhsach')->with('thongbao','Xóa Thành Công');
    }

}
