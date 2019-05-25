<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\DiaDiemAnUong;
use Illuminate\Routing\Controller;

class AnUongController extends Controller
{
    //
    public function getDanhSach()
    {
      $anuong = DiaDiemAnUong::all();
      return view ('admin.anuong.danhsach',['anuong'=> $anuong]
    );
    }

    public function getThem()
    {
      return view('admin.anuong.them');
    }
    public function postThem(Request $request)
    {
    //   $validatedData = $request->validate([
    //      'TieuDe' => 'required|unique:anuong,TieuDe|min:3|max:100',
    //  ],
    //  [
    //    'TieuDe.require'=>'Bạn chưa nhập tên',
    //    'TieuDe.unique'=>'Bạn nhập tên đã tồn tại',
    //    'TieuDe.min'=>'Tên thể loại phải có độ dài từ 3 đến 100 ký tự',
    //    'TieuDe.max'=>'Tên thể loại không được quá 100 ký tự',
    //  ]);
    $anuong = new DiaDiemAnUong;
    $anuong->TieuDe= $request->TieuDe;
    $anuong->TieuDeKhongDau= changeTitle($request->TieuDe);
    $anuong->NoiDung=$request->NoiDung;
    $anuong->Hide=$request->Hide;
    $anuong->TomTat=$request->TomTat;
    $anuong->idDanhMuc=$request->loai;
    if($request->hasFile('Hinh'))
    {
      $file=  $request->file('Hinh');
      $duoi=$file->getClientOriginalExtension();
      if($duoi != 'jpg' && $duoi !='png'&& $duoi !='jpeg' )
      {
        return redirect('admin/anuong/them')->with('loi','Bạn chỉ được tải hình');
      }
      $name=  $file->getClientOriginalName();
      $Hinh=  str_random(4)."_".$name;
      while (file_exists("upload/hinhanuong/".$Hinh))
        {
          $Hinh =str_random(4)."_". $name;
        }
        // code...
        $file->move("upload/hinhanuong", $Hinh);
        $anuong->Hinh=$Hinh;
    }
    else {
      $anuong->Hinh="";
    }
    $anuong->save();
    
    return redirect('admin/anuong/them')->with('thongbao','Thêm Thành Công');
    }

    public function getSua($id)
    {
      $anuong=DiaDiemAnUong::find($id);
      return view ('admin.anuong.sua',['anuong'=>$anuong]);
    }
    public function postSua(Request $request,$id)
    {
      $anuong= DiaDiemAnUong::find($id);
      $validatedData = $request->validate([
         'Ten' => 'required|unique:anuong,Ten|min:3|max:100',
     ],
     [
       'Ten.require'=>'Bạn chưa nhập tên',
       'Ten.unique'=>'Bạn nhập tên đã tồn tại',
       'Ten.min'=>'Tên thể loại phải có độ dài từ 3 đến 100 ký tự',
       'Ten.max'=>'Tên thể loại không được quá 100 ký tự',
     ]);
     $anuong ->Ten =$request->Ten;
     $anuong->TenKhongDau=changeTitle($request->Ten);
     $anuong->save();
     return redirect('admin/anuong/sua/'.$id)->with('thongbao','Sửa Thành Công');
    }
    public function getXoa($id)
    {
      $anuong =DiaDiemAnUong:: find($id);
      $anuong->delete();

      return redirect('admin/anuong/danhsach')->with('thongbao','Xóa Thành Công');
    }

}
