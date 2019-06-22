<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\LoaiTin;
use App\TheLoai;
use Illuminate\Routing\Controller;


class LoaiTinController extends Controller
{
    //
    public function getDanhSach()
    {
      $loaitin = LoaiTin::all();
      return view ('admin.loaitin.danhsach',['loaitin'=> $loaitin]
    );
    }

    public function getThem()
    {
        $theloai = TheLoai::all();
      return view('admin.loaitin.them',['theloai'=>$theloai]);
    }
    public function postThem(Request $request)
    {
      $validatedData = $request->validate([
         'Ten' => 'required|unique:loaitin,Ten|min:3|max:100',
     ],
     [
       'Ten.require'=>'Bạn chưa nhập tên',
       'Ten.unique'=>'Bạn nhập tên đã tồn tại',
       'Ten.min'=>'Tên thể loại phải có độ dài từ 3 đến 100 ký tự',
       'Ten.max'=>'Tên thể loại không được quá 100 ký tự',
     ]);
    $loaitin =new LoaiTin;
    $loaitin->Ten= $request->Ten;
    $loaitin->TenKhongDau= changeTitle($request->Ten);
    $loaitin->idTheLoai=$request->TheLoai;

    if($request->hasFile('Hinh'))
    {
      $file=  $request->file('Hinh');
      $duoi=$file->getClientOriginalExtension();
      if($duoi != 'jpg' && $duoi !='png' && $duoi !='jpeg' )
      {
        return redirect('admin/hinhloaitin/them')->with('loi','Bạn chỉ được tải hình');
      }
      $name=  $file->getClientOriginalName();
      $Hinh=  str_random(4)."_".$name;
      while (file_exists("upload/hinhloaitin/".$Hinh))
        {
          $Hinh =str_random(4)."_". $name;
        }
        // code...
        $file->move("upload/hinhloaitin", $Hinh);
        $loaitin->Hinh=$Hinh;
    }
    else {
      $loaitin->Hinh="";
    }
    //Add hinh 1
    if($request->hasFile('Hinh1'))
    {
      $file=  $request->file('Hinh1');
      $duoi=$file->getClientOriginalExtension();
      if($duoi != 'jpg' && $duoi !='png' && $duoi !='jpeg' )
      {
        return redirect('admin/hinhloaitin/them')->with('loi','Bạn chỉ được tải hình');
      }
      $name=  $file->getClientOriginalName();
      $Hinh1=  str_random(4)."_".$name;
      while (file_exists("upload/hinhloaitin/".$Hinh1))
        {
          $Hinh1 =str_random(4)."_". $name;
        }
        // code...
        $file->move("upload/hinhloaitin", $Hinh1);
        $loaitin->Hinh1=$Hinh1;
    }
    else {
      $loaitin->Hinh1="";
    }


    $loaitin->save();

    return redirect('admin/loaitin/them')->with('thongbao','Thêm Thành Công');
    }

    public function getSua($id)
    {
      $theloai= TheLoai::all();
      $loaitin=LoaiTin::find($id);
      return view ('admin.loaitin.sua',['loaitin'=>$loaitin,'theloai'=>$theloai]);
    }
    public function postSua(Request $request,$id)
    {

      $validatedData = $request->validate([
         'Ten' => 'required|min:3|max:100',
     ],
     [
       'Ten.require'=>'Bạn chưa nhập tên',
       'Ten.min'=>'Tên thể loại phải có độ dài từ 3 đến 100 ký tự',
       'Ten.max'=>'Tên thể loại không được quá 100 ký tự',
     ]);
     $loaitin= LoaiTin::find($id);
     $loaitin ->Ten = $request->Ten;
     $loaitin->TenKhongDau= changeTitle($request->Ten);
     $loaitin->idTheLoai = $request->TheLoai;

     if($request->hasFile('Hinh'))
   {
     $file=  $request->file('Hinh');
     $duoi=$file->getClientOriginalExtension();
     if($duoi != 'jpg' && $duoi !='png'&& $duoi !='jpeg' )
     {
       return redirect('admin/hinhloaitin/sua')->with('loi','B?n ch? du?c t?i hình');
     }
     $name=  $file->getClientOriginalName();
     $Hinh=  str_random(4)."_".$name;
     while (file_exists("upload/hinhloaitin/".$Hinh))
       {
         $Hinh =str_random(4)."_". $name;
       }
       // code...
       $file->move("upload/hinhloaitin", $Hinh);
       unlink("upload/hinhloaitin/".$loaitin->Hinh);
       $loaitin->Hinh=$Hinh;
   }

     $loaitin->save();
     return redirect('admin/loaitin/sua/'.$id)->with('thongbao','Sửa Thành Công');
    }

   
    public function getXoa($id)
    {
      $loaitin =LoaiTin:: find($id);
      $loaitin->delete();

      return redirect('admin/loaitin/danhsach')->with('thongbao','Xóa Thành Công');
    }
}
