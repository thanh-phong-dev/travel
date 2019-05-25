<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\TheLoai;
use App\Comment;
use App\LoaiTin;
use App\TinTuc;
use App\DienDan;
use App\ChiTietDienDan;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\KhachSan;

class CommentController extends Controller
{
    //
    public function getDanhSach()
    {
        $tintuc=TinTuc::all();

        return view('admin.comment.danhsach',['tintuc'=>$tintuc]);
    }
    public function getXoa($id)
    {
      $theloai =TheLoai:: find($id);
      $theloai->delete();

      return redirect('admin/theloai/danhsach')->with('thongbao','Xóa Thành Công');
    }

    public function postcomment($id, Request $request){
      $idTinTuc =$id;
      $tintuc=TinTuc::find($id);
      $comment =new Comment;
      $comment->idTinTuc =$idTinTuc;
      $comment->idUser=Auth::user()->id;
      $comment->NoiDung=$request->NoiDung;
      $comment->save();
      return redirect("chi-tiet-tin-tuc/$id/".$tintuc->TieuDeKhongDau.".html")->with('thongbao','thành công');
    }
    public function postcommentkhachsan($id, Request $request){
      $idKhachSan =$id;
      $khachsan=KhachSan::find($id);
      $comment =new Comment;
      $comment->idKhachSan =$idKhachSan;
      $comment->idUser=Auth::user()->id;
      $comment->NoiDung=$request->NoiDung;
      $comment->DanhGia=$request->DanhGia;
      $comment->save();
      return redirect("khach-san/$id/".$khachsan->TenKhongDau.".html")->with('thongbao','thành công');
    }

    public function postbinhluan($id, Request $request)
    {
      $idDienDan=$id;
      $diendan=DienDan::find($id);
      $comment=new Comment();
      $comment->iddiendan=$idDienDan;
      $comment->idUser=Auth::user()->id;
      $comment->NoiDung=$request->NoiDung;
      $comment->save();
      return redirect("chi-tiet/$id/".$diendan->TieuDeKhongDau.".html")->with('thongbao','thành công');

    }

}
