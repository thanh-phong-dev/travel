<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\LoaiTin;
use App\TheLoai;
use App\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function getDanhSach()
    {
      $user = User::all();
      return view ('admin.user.danhsach',['user'=> $user]
    );
    }
    //Thêm
    public function getThem()
    {
      return view('admin.user.them');
    }
    //POST Thêm
    public function postThem(Request $request)
    {

    $user =new User;
    $user->name= $request->username;
    $user->email=$request->email;
    $user->password=bcrypt($request->nhaplaimatkhau);
    $user->quyen=$request->quyen;
    $user->save();

    return redirect('admin/user/them')->with('thongbao','Thêm Thành Công');
    }

    public function getSua($id)
    {
      $user=User::find($id);
      return view ('admin.user.sua',['user'=>$user]);
    }
    public function postSua(Request $request,$id)
    {

      $user=User::find($id);
      $user->name= $request->username;
      $user->email=$request->email;
    
      $user->quyen=$request->quyen;

      if(  $request->changePassword=="off"){
        $user->password=bcrypt($request->changePassword);
      }
      $user->save();
        return redirect('admin/user/sua/'.$id)->with('thongbao','Thêm Thành Công');
    }

    public function getXoa($id)
    {
      $user =User:: find($id);
      $user->delete();

      return redirect('admin/user/danhsach')->with('thongbao','Xóa Thành Công');
    }
    public function getdangnhapAdmin()
    {
      return view('admin.login');
    }

    public function postdangnhapAdmin(Request $request){
      $validatedData = $request->validate([
         'email' => 'required|min:3|max:100',
     ],
     [
       'email.required'=>'Bạn chưa nhập tên',
       'email.min'=>'Tên thể loại phải có độ dài từ 3 đến 100 ký tự',
       'email.max'=>'Tên thể loại không được quá 100 ký tự',
     ]);
    if (Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
    {
      return redirect('admin/user/danhsach');
    }
    else {
      return redirect('admin/dangnhap')->with('thongbao','Sai tên hoặc mật khẩu đăng nhập');
    }
    }
    public  function getdangxuatpAdmin(){
      Auth::logout();
        return redirect('admin/dangnhap');
    }
}
