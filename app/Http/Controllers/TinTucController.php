  <?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\LoaiTin;
use App\TheLoai;
use App\TinTuc;
use App\Comment;
use Illuminate\Routing\Controller;


class TinTucController extends Controller
{
    //
    public function getDanhSach()
    {
      $tintuc = TinTuc::all();
      return view ('admin.tintuc.danhsach',['tintuc'=> $tintuc]
    );
    }
    //Thêm
    public function getThem()
    {
      $theloai=TheLoai::all();
      $loaitin=LoaiTin::all();
      return view('admin.tintuc.them',['theloai'=>$theloai,'loaitin'=>$loaitin]);
    }
    //POST Thêm
    public function postThem(Request $request)
    {


      $tintuc=new TinTuc;
      $tintuc->TieuDe       = $request->TieuDe;
      $tintuc->TieuDeKhongDau=changeTitle($request->TieuDe);
      $tintuc->idLoaiTin=$request->LoaiTin;
      $tintuc->TomTat=$request->TomTat;
      $tintuc->NoiDung=$request->NoiDung;
      $tintuc->NoiBat=$request->NoiBat;

      if($request->hasFile('Hinh'))
      {
        $file=  $request->file('Hinh');
        $duoi=$file->getClientOriginalExtension();
        if($duoi != 'jpg' && $duoi !='png'&& $duoi !='jpeg' )
        {
          return redirect('admin/tintuc/them')->with('loi','Bạn chỉ được tải hình');
        }
        $name=  $file->getClientOriginalName();
        $Hinh=  str_random(4)."_".$name;
        while (file_exists("upload/tintuc/".$Hinh))
          {
            $Hinh =str_random(4)."_". $name;
          }
          // code...
          $file->move("upload/tintuc", $Hinh);
          $tintuc->Hinh=$Hinh;
      }
      else {
        $tintuc->Hinh="";
      }
      $tintuc->save();
      return redirect('admin/tintuc/them')->with('thongbao','Thêm Thành Công');
    }

    public function getSua($id)
    {
      $theloai=TheLoai::all();
      $loaitin=LoaiTin::all();
      $tintuc=TinTuc::find($id);
      return view ('admin.tintuc.sua',['tintuc'=>$tintuc,'theloai'=>$theloai,'loaitin'=>$loaitin]);
    }
    public function postSua(Request $request,$id)
    {
      $tintuc=TinTuc::find($id);
      $tintuc->TieuDe= $request->TieuDe;
      $tintuc->TieuDeKhongDau=changeTitle($request->TieuDe);
      $tintuc->idLoaiTin=$request->LoaiTin;
      $tintuc->TomTat=$request->TomTat;
      $tintuc->NoiDung=$request->NoiDung;
      $tintuc->NoiBat=$request->NoiBat;
      if($request->hasFile('Hinh'))
      {
        $file=  $request->file('Hinh');
        $duoi=$file->getClientOriginalExtension();
        if($duoi != 'jpg' && $duoi !='png'&& $duoi !='jpeg' )
        {
          return redirect('admin/tintuc/sua')->with('loi','Bạn chỉ được tải hình');
        }
        $name=  $file->getClientOriginalName();
        $Hinh=  str_random(4)."_".$name;
        while (file_exists("upload/tintuc/".$Hinh))
          {
            $Hinh =str_random(4)."_". $name;
          }
          // code...
          $file->move("upload/tintuc", $Hinh);
          unlink("upload/tintuc/".$tintuc->Hinh);
          $tintuc->Hinh=$Hinh;
      }

      $tintuc->save();
     return redirect('admin/tintuc/sua/'.$id)->with('thongbao','Sửa Thành Công');
    }

    public function getXoa($id)
    {
      $tintuc =TinTuc:: find($id);
      $tintuc->delete();

      return redirect('admin/tintuc/danhsach')->with('thongbao','Xóa Thành Công');
    }
}
