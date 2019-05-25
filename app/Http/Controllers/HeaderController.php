<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

use App\Header;

use Illuminate\Routing\Controller;

class HeaderController extends Controller
{
  public function getDanhSach()
  {
    $header=Header::orderBy('id','DESC')->get();
    return view ('admin.header.danhsach',['header'=> $header]
  );
  }

  //Thêm
 
  //POST Thêm
 

  public function getSua($id)
  {
   
    $header=Header::find($id);
    return view ('admin.header.sua',['header'=>$header]);
  }
  public function postSua(Request $request,$id)
  {
    $validatedData = $request->validate([
        'Sdt' => 'numeric',
      ],
      [
        'Sdt.numeric'=>'Bạn chưa nhập tên',
      ]);

    $header=Header::find($id);
    $header->LinkFb=$request->LinkFb;
    $header->Sdt=$request->sdt;
    $header->Email=$request->email;
    $header->Maps=$request->maps;
    $header->DiaChi=$request->diachi;

    if($request->hasFile('Hinh'))
    {
      $file=  $request->file('Hinh');
      $duoi=$file->getClientOriginalExtension();
      if($duoi != 'jpg' && $duoi !='png'&& $duoi !='jpeg' )
      {
        return redirect('admin/footer/sua')->with('loi','Bạn chỉ được tải hình');
      }
      $name=  $file->getClientOriginalName();
      $Hinh=  str_random(4)."_".$name;
      while (file_exists("upload/footer/".$Hinh))
        {
          $Hinh =str_random(4)."_". $name;
        }
        // code...
        $file->move("upload/footer", $Hinh);
        unlink("upload/footer/".$header->Hinh);
        $header->Hinh=$Hinh;
    }
      $header->save();
     return redirect('admin/header/danhsach')->with('thongbao','Sửa Thành Công');
  }



}
