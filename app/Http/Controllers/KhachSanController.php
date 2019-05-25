<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\TheLoai;
use App\LoaiTin;
use App\PhongKhachSan;
use App\KhachSan;

use Illuminate\Routing\Controller;

class KhachSanController extends Controller
{
    public function getDanhSach()
    {
        $khachsan=KhachSan::all();
        return view('admin.khachsan.danhsach', ['khachsan'=>$khachsan]);
    }

    public function getThem()
    {
        $khachsan=KhachSan::all();
        $loaitin=LoaiTin::all();
        return view('admin.khachsan.them',['khachsan'=>$khachsan,'loaitin'=>$loaitin]);
    }
    public function getThemPhong()
    {
        $khachsan=KhachSan::orderBy('id','DESC')->take(1)->get();
        return view('admin.khachsan.themphong',['khachsan'=>$khachsan]);
    }

    public function postThem(Request $request)
    {
        $khachsan = new KhachSan();
        $khachsan->Ten = $request->Ten;
        $khachsan->TenKhongDau=changeTitle($request->Ten);
        $khachsan->Gia = $request->Gia;
        $khachsan->SoPhong = $request->SoPhong;
        $khachsan->idDiaDiem = $request->idDiaDiem;
        $khachsan->DiaChi = $request->DiaChi;
        $khachsan->Maps = $request->Maps;
        $khachsan->HienThi = $request->HienThi;
        $khachsan->NoiDung = $request->NoiDung;
        $khachsan->NoiBat = $request->NoiBat;
        $khachsan->TomTat = $request->TomTat;
        $khachsan->Sao = $request->Sao;
        $khachsan->SoDienThoai = $request->SoDienThoai;
        $khachsan->SoLuotXem=0;
        if ($request->hasFile('Hinh')) {
            $file=  $request->file('Hinh');
            $duoi=$file->getClientOriginalExtension();
            $name=  $file->getClientOriginalName();
            $Hinh=  str_random(4)."_".$name;
            while (file_exists("upload/khachsan/".$Hinh)) {
                $Hinh =str_random(4)."_". $name;
            }
            // code...
            $file->move("upload/khachsan", $Hinh);
            $khachsan->Hinh=$Hinh;
        } else {
            $khachsan->Hinh="";
        }
        $khachsan->save();
        return redirect('admin/khachsan/themphong');

    }

    public function postThemPhong(Request $request)
    {
        $phongkhachsan = new PhongKhachSan();
        $phongkhachsan->TenPhong = $request->Ten;
        $phongkhachsan->idkhachsan=$request->khachsan;
        $phongkhachsan->TenKhongDau=changeTitle($request->Ten);
        $phongkhachsan->Gia = $request->Gia;
        $phongkhachsan->SoNguoi = $request->SoNguoi;
        $phongkhachsan->NguoiLon = $request->NguoiLon;
        $phongkhachsan->SoPhong = $request->SoPhong;
        $phongkhachsan->TreEm = $request->TreEm;
        if ($request->hasFile('Hinh')) {
            $file=  $request->file('Hinh');
            $duoi=$file->getClientOriginalExtension();
            $name=  $file->getClientOriginalName();
            $Hinh=  str_random(4)."_".$name;
            while (file_exists("upload/khachsan/".$Hinh)) {
                $Hinh =str_random(4)."_". $name;
            }
            // code...
            $file->move("upload/khachsan", $Hinh);
            $phongkhachsan->Hinh=$Hinh;
        } else {
            $phongkhachsan->Hinh="";
        }
        $phongkhachsan->save();
        return redirect('admin/khachsan/themphong')->with('thongbao','Thêm Thành Công');

    }

    public function getSua($id)
    {
        $tintuc=KhachSan::find($id);
        return view('admin.khachsan.sua',['tintuc'=>$tintuc]);
    }
    public function postSua(Request $request,$id)
    {
        $khachsan=KhachSan::find($id);
        $khachsan->Ten = $request->Ten;
        $khachsan->TenKhongDau=changeTitle($request->Ten);
        $khachsan->Gia = $request->Gia;
        $khachsan->SoPhong = $request->SoPhong;
        $khachsan->DiaChi = $request->DiaChi;
        $khachsan->Maps = $request->Maps;
        $khachsan->HienThi = $request->HienThi;
        $khachsan->NoiBat = $request->NoiBat;
        $khachsan->SoDienThoai = $request->SoDienThoai;
        $khachsan->NoiDung = $request->NoiDung;
        $khachsan->TomTat = $request->TomTat;
        $khachsan->Sao = $request->Sao;
        $khachsan->SoLuotXem=0;
        
    if($request->hasFile('Hinh'))
    {
      $file=  $request->file('Hinh');
      $name=  $file->getClientOriginalName();
      $Hinh=  str_random(4)."_".$name;
      while (file_exists("upload/khachsan/".$Hinh))
        {
          $Hinh =str_random(4)."_". $name;
        }
        // code...
        $file->move("upload/khachsan", $Hinh);
        // unlink("upload/khachsan/".$khachsan->Hinh);
        $khachsan->Hinh=$Hinh;
     }

    $khachsan->save();
    return redirect('admin/khachsan/danhsach')->with('thongbao','Thêm Thành Công');

    }
    public function getXem($id)
    {
     $khachsan=KhachSan::find($id);
     $phongkhachsan=PhongKhachSan::where('idkhachsan','=',$khachsan->id)->get();
     return view('admin/khachsan/xem',['khachsan'=>$khachsan,'phongkhachsan'=>$phongkhachsan]);
    }
    public function getSuaPhong($id)
    {
    $phongkhachsan=PhongKhachSan::find($id);
    return view('admin/khachsan/suaphongks',['phongkhachsan'=>$phongkhachsan]);
    }
    function postSuaPhong(Request $request,$id)
    {
        $phongkhachsan=PhongKhachSan::find($id);
        $phongkhachsan->TenPhong = $request->TenPhong;
        $phongkhachsan->Gia = $request->Gia;
        $phongkhachsan->SoNguoi = $request->SoNguoi;
        $phongkhachsan->NguoiLon = $request->NguoiLon;
        $phongkhachsan->TreEm = $request->TreEm;
        $phongkhachsan->SoPhong = $request->SoPhong;
    if($request->hasFile('Hinh'))
    {
      $file=  $request->file('Hinh');
      $name=  $file->getClientOriginalName();
      $Hinh=  str_random(4)."_".$name;
      while (file_exists("upload/khachsan/".$Hinh))
        {
          $Hinh =str_random(4)."_". $name;
        }
        // code...
        $file->move("upload/khachsan", $Hinh);
        // unlink("upload/khachsan/".$khachsan->Hinh);
        $phongkhachsan->Hinh=$Hinh;
     }

    $phongkhachsan->save();
    return redirect('admin/khachsan/xem/'.$phongkhachsan->idkhachsan)->with('thongbao','Thêm Thành Công');
    }
    function getThemPhongks($id)
    {
    $khachsan=KhachSan::find($id);
    return view('admin/khachsan/themphongks',['khachsan'=>$khachsan]);
    }
    function postThemPhongks(Request $request)
    {
        $phongkhachsan = new PhongKhachSan();
        $phongkhachsan->TenPhong = $request->TenPhong;
        $phongkhachsan->idkhachsan=$request->idkhachsan;
        $phongkhachsan->TenKhongDau=changeTitle($request->TenPhong);
        $phongkhachsan->Gia = $request->Gia;
        $phongkhachsan->SoNguoi = $request->SoNguoi;
        $phongkhachsan->NguoiLon = $request->NguoiLon;
        $phongkhachsan->SoPhong = $request->SoPhong;
        $phongkhachsan->TreEm = $request->TreEm;
        if ($request->hasFile('Hinh')) {
            $file=  $request->file('Hinh');
            $duoi=$file->getClientOriginalExtension();
            $name=  $file->getClientOriginalName();
            $Hinh=  str_random(4)."_".$name;
            while (file_exists("upload/khachsan/".$Hinh)) {
                $Hinh =str_random(4)."_". $name;
            }
            // code...
            $file->move("upload/khachsan", $Hinh);
            $phongkhachsan->Hinh=$Hinh;
        } else {
            $phongkhachsan->Hinh="";
        }
        $phongkhachsan->save();
        return redirect('admin/khachsan/danhsach')->with('thongbao','Thêm Thành Công');
    }
}

