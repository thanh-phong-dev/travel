<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\LoaiTin;
use App\TheLoai;
use App\TinTuc;
use App\Comment;
use App\Slide;
use App\QuangCao;
use App\LienHe;
use App\User;
use App\DiaDiemAnUong;
use App\DanhMucAnUong;
use App\KhachSan;
use App\PhongKhachSan;
use App\DatPhong;
use App\DienDan;
use App\GioiThieu;

use App\ChiTietDienDan;

use Carbon\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function __construct()
    {
        $danhmucanuong=DanhMucAnUong::all();
        $theloai=TheLoai::all();
        $loaitin=LoaiTin::all();
        $slide =Slide::all();
        $quangcao =QuangCao::all();
        $user = User::all();
        $tinnoibat=KhachSan::where('NoiBat', '=', 1)->take(2)->get();
        $tintucslide=TinTuc::orderBy('id', 'DESC')->take(10)->get();
        $danhsachloaitin=LoaiTin::orderBy('id', 'DESC')->take(5)->get();
        $gioithieu=GioiThieu::all();
        $khachsan=KhachSan::orderBy('SoLuotXem', 'DESC')->take(9)->get();
        $tintuc=TinTuc::all();
        view()->share('gioithieu',$gioithieu);
        view()->share('tinnoibat', $tinnoibat);
        view()->share('danhmucanuong', $danhmucanuong);
        view()->share('theloai', $theloai);
        view()->share('loaitin', $loaitin);
        view()->share('slide', $slide);
        view()->share('danhsachloaitin', $danhsachloaitin);
        view()->share('quangcao', $quangcao);
        view()->share('user', $user);
        view()->share('tintucslide', $tintucslide);
        view()->share('khachsan', $khachsan);
        view()->share('tintuc', $tintuc);
        if (Auth::check()) {
            view()->share('nguoidung', Auth::user());
        }
    }
    public function trangchu()
    {
        return view('page.trangchu');
    }

    public function gioithieu()
    {
        return view('page.gioithieu');
    }

    public function tintuc(Request $request)
    {
        $khachsan=KhachSan::orderBy('id', 'DESC')->where('HienThi',1)->where('NoiBat',1)->take(4)->get();
        $loaitin=LoaiTin::orderBy('id', 'DESC')->take(6)->get();
        $tintuc=TinTuc::orderBy('id', 'DESC')->where('HienThi',1)->paginate(3);
        return view('page.tintuc', ['loaitin'=>$loaitin,'tintuc'=>$tintuc,'khachsan'=>$khachsan]);
    }

    public function ajax()
    {
        $loaitin=LoaiTin::orderBy('id', 'DESC')->take(6)->get();
        $tintuc=TinTuc::orderBy('id', 'DESC')->paginate(3);
        return view('page.ajaxloatin', ['loaitin'=>$loaitin,'tintuc'=>$tintuc]);
    }

    public function khachsan()
    {
        $khachsan=KhachSan::orderBy('id', 'DESC')->where('HienThi',1)->paginate(8);
        $tatcakhachsan=KhachSan::where('HienThi',1)->get();
        return view('page.khachsan', ['khachsan'=>$khachsan, 'tatcakhachsan'=>$tatcakhachsan]);
    } 

    public function chitietkhachsan($id)
    {
        $phongkhachsan=PhongKhachSan::all();
        $khachsan=KhachSan::find($id);
        $phongcuakhachsan=PhongKhachSan::where('idkhachsan', '=', $khachsan->id)->get();
        $khachsanlienquan=KhachSan::where('DiaChi', 'like', $khachsan->DiaChi)->get()->take(5);
        $tinhluotxem=KhachSan::where('id', $id)->update(['SoLuotXem' => $khachsan->SoLuotXem+1]);
        return view('page.chitietkhachsan', ['tinhluotxem'=>$tinhluotxem,'khachsan'=>$khachsan,'khachsanlienquan'=>$khachsanlienquan,'phongkhachsan'=>$phongkhachsan,'phongcuakhachsan'=>$phongcuakhachsan]);
    }

    public function chitiettintuc1($id)
    {
        $khachsan=KhachSan::where('NoiBat',1)->orderby('id','desc')->take(4)->get();
        $loaitin=LoaiTin::orderBy('id', 'DESC')->take(6)->get();
        $tintuc=TinTuc::find($id);
        $tinhluotxem=TinTuc::where('id', $id)->update(['SoLuotXem' => $tintuc->SoLuotXem+1]);
        return view('page.chitiettintuc', ['khachsan'=>$khachsan,'tintuc'=>$tintuc,'loaitin'=>$loaitin,'tinhluotxem'=>$tinhluotxem]);
    }

    public function diadiemdulich($id)
    {
        $loaitin=LoaiTin::find($id);
        $khachsan=KhachSan::where('idDiaDiem', $id)->get();
        return view('page.diadiemdulich', ['khachsan'=>$khachsan,'loaitin'=>$loaitin]);
    }

    public function chitiettintuc($id)
    {
        $tintuc=TinTuc::find($id);
        $tinnoibat=TinTuc::where('NoiBat', 1)->take(1)->get();
        $tinlienquan=TinTuc::where('idLoaiTin', $tintuc->idLoaiTin)->take(4)->get();
        $theloai=TheLoai::all();
        $tinhluotxem=TinTuc::where('id', $id)->update(['SoLuotXem' => $tintuc->SoLuotXem+1]);
        return view('page.chitiettintuc', ['tintuc'=>$tintuc,'tinnoibat'=>$tinnoibat,'tinlienquan'=>$tinlienquan,'theloai'=>$theloai,'tinhluotxem'=>$tinhluotxem]);
    }

    public function anuong($id)
    {
        $anuong=DiaDiemAnUong::find($id);
        return view('page.chitiettintuc', ['anuong'=>$anuong]);
    }

    public function lienhe()
    {
        return view('page.lienhe');
    }

    public function postlienhe(Request $request)
    {
        $lienhe = new LienHe;
        $lienhe->Ten = $request->name;
        $lienhe->Email = $request->email;
        $lienhe->SoDienThoai=$request->sodienthoai;

        $lienhe->LoiNhan=$request->LoiNhan;
        $lienhe->save();
        return redirect('trang-chu.html');
    }
  
    public function getdangkiuser()
    {
        return view('page.dangkiuser');
    }

    public function getDangNhap()
    {
        return view('page.dangnhapuser');
    }

    public function postDangNhap(Request $request)
    {
        $validatedData = $request->validate(
       [
    'email' => 'required|min:3|max:100',
  ],
       [
    'email.required'=>'Bạn chưa nhập tên',
    'email.min'=>'Tên thể loại phải có độ dài từ 3 đến 100 ký tự',
    'email.max'=>'Tên thể loại không được quá 100 ký tự',
  ]
   );
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
            return redirect('trang-chu.html');
        } else {
            return redirect('dangnhap')->with('thongbao', 'Sai tên hoặc mật khẩu đăng nhập');
        }
    }
    public function getdangxuatuser()
    {
        Auth::logout();
        return redirect('trang-chu.html');
    }

    public function postdangkiuser(Request $request)
    {
        $validatedData = $request->validate(
       [
      'email' => 'required|unique:users,email|min:3|max:100|email',
 
        ],
        [
    'email.required'=>'Bạn chưa nhập tên',
    'email.unique'=>'Email đã tồn tại',
    'email.min'=>'Email phải có độ dài từ 3 đến 100 ký tự',
    'email.max'=>'Email không được quá 100 ký tự',
    'email.email'=>'Vui lòng nhập đúng Email',
        ]
   );
        $user =new User;
        $user->name= $request->name;
        $user->lastname= $request->lastname;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->quyen=0;
        $user->sdt= $request->sdt;
        $user->save();
        return redirect('dang-nhap.html')->with('thongbao', 'Đăng kí thành công');
    }

    public function test()
    {
        return view('page.trangchu');
    }

    public function timkiem(Request $request)
    {
        $tukhoa =$request->tukhoa;
        $tintuc =TinTuc::where('TieuDe', 'like', "%$tukhoa%")->paginate(10);
        $khachsannoibat=KhachSan::where('NoiBat',1)->orderby('id','desc')->take(6)->get();
        return view('page.timkiem', ['tintuc'=>$tintuc,'tukhoa'=>$tukhoa,'khachsannoibat'=>$khachsannoibat]);
    }
 
    public function timkiemkhachsan(Request $request)
    {
        $tukhoa1=$request->tukhoa1;
        $khachsan=KhachSan::where('DiaChi','like', "%$tukhoa1%")->get();
        return view('page.timkiemkhachsan', ['khachsan'=>$khachsan,'tukhoa1'=>$tukhoa1]);
    }

    public function thanhtoan($id)
    {
        $khachsan=PhongKhachSan::find($id);
        $khachsanmaster=KhachSan::where('id', '=', $khachsan->idkhachsan)->get();
        return view('page.thanhtoan', ['khachsan'=>$khachsan,'khachsanmaster'=>$khachsanmaster]);
    }

    public function diendan()
    {
        $khachsan=KhachSan::where('NoiBat',1)->orderby('id','desc')->take(8)->get();
        $diendan=DienDan::orderby('id','desc')->paginate(6);
        return view('page.diendan',['diendan'=>$diendan,'khachsan'=>$khachsan]);
    }

    public function chitietdiendan($id)
    {
        $khachsan=KhachSan::where('NoiBat',1)->orderby('id','desc')->take(4)->get();
        $diendan=DienDan::find($id);
        $tinhluotxem=DienDan::where('id', $id)->update(['LuotXem' => $diendan->LuotXem+1]);
        return view('page.chitietdiendan',['diendan'=>$diendan,'khachsan'=>$khachsan,'tinhluotxem'=>$tinhluotxem]);
    }

    public function postthanhtoan($id, Request $request)
    {
        $phongkhachsan=PhongKhachSan::find($id);
        $datphong= new DatPhong();
        $datphong->Idkhachsan=$phongkhachsan->idkhachsan;
        $datphong->NgayDat = $request->NgayDat;
        $datphong->NgayTra = $request->NgayTra;
        $datphong->SoNgayO = $request->SoNgayO;
        $datphong->LoaiPhong = $request->LoaiPhong;
        $datphong->ThanhTien = $request->TongTien;
        $datphong->HoTen = $request->HoTen;
        $datphong->SoDienThoai = $request->SoDienThoai;
        $datphong->Email = $request->Email;
        $datphong->TinhTrang =0;
        $datphong->save();
        return redirect("trang-chu.html")->with('thongbao', 'thành công');
    }

    public function cauhoi()
    {
        return view('page.cauhoi');
    }

    public function postcauhoi(Request $request)
    {
        $diendan=  new DienDan();
        $diendan->TieuDe= $request->Ten;
        $diendan->TieuDeKhongDau=changeTitle($request->Ten);
        $diendan->NguoiDang= Auth::user()->name;
        $diendan->LuotXem=0;
        $diendan->save();
        return redirect("dien-dan.html")->with('thongbao', 'Thành công');
    }
}
