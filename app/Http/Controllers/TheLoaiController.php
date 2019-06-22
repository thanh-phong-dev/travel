<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\TheLoai;
use Illuminate\Routing\Controller;

class TheLoaiController extends Controller
{
    //
    public function getDanhSach()
    {
      $theloai = TheLoai::all();
      return view ('admin.theloai.danhsach',['theloai'=> $theloai]
    );
    }

    public function getThem()
    {
      return view('admin.theloai.them');
    }
    public function postThem(Request $request)
    {
      $validatedData = $request->validate([
         'Ten' => 'required|unique:theloai,Ten|min:3|max:100',
     ],
     [
       'Ten.require'=>'Bạn chưa nhập tên',
       'Ten.unique'=>'Bạn nhập tên đã tồn tại',
       'Ten.min'=>'Tên thể loại phải có độ dài từ 3 đến 100 ký tự',
       'Ten.max'=>'Tên thể loại không được quá 100 ký tự',
     ]);
    $theloai =new TheLoai;
    $theloai->Ten= $request->Ten;
    $theloai->TenKhongDau= changeTitle($request->Ten);
    $theloai->save();

    return redirect('admin/theloai/them')->with('thongbao','Thêm Thành Công');
    }

    public function getSua($id)
    {
      $theloai=TheLoai::find($id);
      return view ('admin.theloai.sua',['theloai'=>$theloai]);
    }
    public function postSua(Request $request,$id)
    {
      $theloai= TheLoai::find($id);
      $validatedData = $request->validate([
         'Ten' => 'required|unique:TheLoai,Ten|min:3|max:100',
     ],
     [
       'Ten.require'=>'Bạn chưa nhập tên',
       'Ten.unique'=>'Bạn nhập tên đã tồn tại',
       'Ten.min'=>'Tên thể loại phải có độ dài từ 3 đến 100 ký tự',
       'Ten.max'=>'Tên thể loại không được quá 100 ký tự',
     ]);
     $theloai ->Ten =$request->Ten;
     $theloai->TenKhongDau=changeTitle($request->Ten);
     $theloai->save();
     return redirect('admin/theloai/sua/'.$id)->with('thongbao','Sửa Thành Công');
    }
    public function getXoa($id)
    {
      $theloai =TheLoai:: find($id);
      $theloai->delete();

      return redirect('admin/theloai/danhsach')->with('thongbao','Xóa Thành Công');
    }

}
