<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\LienHe;
use Illuminate\Routing\Controller;

class LienHeController extends Controller
{
    //
    public function getDanhSach()
    {
      $lienhe = LienHe::all();
      return view ('admin.lienhe.danhsach',['lienhe'=> $lienhe]
    );
    }
    public function getXoa($id)
    {
      $lienhe =LienHe:: find($id);
      $lienhe->delete();
      return redirect('admin/lienhe/danhsach')->with('thongbao','Xóa Thành Công');
    }

}
