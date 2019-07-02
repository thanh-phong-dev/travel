<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


  Route::get('admin/dangnhap','UserController@getdangnhapAdmin');
    Route::post('admin/dangnhap','UserController@postdangnhapAdmin');
    Route::get('admin/dangxuat','UserController@getdangxuatpAdmin');

    Route::get('dang-ki-user.html','PageController@getdangkiuser');
    Route::post('dang-ki-user.html','PageController@postdangkiuser');

    Route::get('dangxuatuser','PageController@getdangxuatuser');

    Route::post('dangkiuser','PageController@postdangkiuser');
    // Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
    Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){

    Route::group(['prefix'=>'theloai'],function(){
      //admin/theloai/danhsach
      Route::get('danhsach','TheLoaiController@getDanhSach');
      Route::get('sua/{id}','TheLoaiController@getSua');
      Route::post('sua/{id}','TheLoaiController@postSua');
      Route::get('them','TheLoaiController@getThem');
      Route::post('them','TheLoaiController@postThem');
      Route::get('xoa/{id}','TheLoaiController@getXoa');
    });
    // khách sạn
         
    Route::group(['prefix'=>'khachsan'],function(){
      //admin/theloai/danhsach
      Route::get('danhsachngunghoatdong','KhachSanController@getDanhSachNgungHoatDong');
      Route::get('danhsach','KhachSanController@getDanhSach');
      Route::get('sua/{id}','KhachSanController@getSua');
      Route::post('sua/{id}','KhachSanController@postSua');
      Route::get('suaphong/{id}','KhachSanController@getSuaPhong');
      Route::get('themphongks/{id}','KhachSanController@getThemPhongKS');
      Route::post('themphongks','KhachSanController@postThemPhongKS');
      Route::post('suaphong/{id}','KhachSanController@postSuaPhong');
      Route::get('them','KhachSanController@getThem');
      Route::post('them','KhachSanController@postThem');
      Route::get('themphong','KhachSanController@getThemPhong');
      Route::post('themphong','KhachSanController@postThemPhong');
      Route::get('xem/{id}','KhachSanController@getXem');
      Route::get('xoa/{id}','KhachSanController@getXoa');
    });
    //
      Route::group(['prefix'=>'comment'],function(){
        //admin/slide/danhsach
      Route::get('danhsach','CommentController@getDanhSach');
      Route::get('xoa/{id}','CommentController@getXoa');
  });
    //Loại Tin
      Route::group(['prefix'=>'loaitin'],function(){
      //admin/theloai/danhsach
      Route::get('danhsach','LoaiTinController@getDanhSach');
      Route::get('sua/{id}','LoaiTinController@getSua');
      Route::post('sua/{id}','LoaiTinController@postSua');
      Route::get('them','LoaiTinController@getThem');
      Route::post('them','LoaiTinController@postThem');
      Route::get('xoa/{id}','LoaiTinController@getXoa');
    });
    //Tin tức
      Route::group(['prefix'=>'tintuc'],function(){
      //admin/tintuc/danhsach
      Route::get('danhsachdaxoa','TinTucController@getDanhSachDaXoa');
      Route::get('danhsach','TinTucController@getDanhSach');
      Route::get('sua/{id}','TinTucController@getSua');
      Route::post('sua/{id}','TinTucController@postSua');
      Route::get('them','TinTucController@getThem');
      Route::post('them','TinTucController@postThem');
      Route::get('xoa/{id}','TinTucController@getXoa');
    });
     // Header
     Route::group(['prefix' => 'header'], function () {
      //admin/theloai/danhsach
      Route::get('danhsach', 'HeaderController@getDanhSach');
      Route::get('sua/{id}', 'HeaderController@getSua');
      Route::post('sua/{id}', 'HeaderController@postSua');
  });
    //Người dùng
      Route::group(['prefix'=>'user'],function(){
    //admin/user/danhsach
      Route::get('danhsach','UserController@getDanhSach');
      Route::get('sua/{id}','UserController@getSua');
      Route::post('sua/{id}','UserController@postSua');
      Route::get('them','UserController@getThem');
      Route::post('them','UserController@postThem');
      Route::get('xoa/{id}','UserController@getXoa');
  });
  // Dặt phòng
  Route::group(['prefix'=>'datphong'],function(){
    //admin/user/danhsach
      Route::get('danhsach','DatPhongController@getDanhSach');
      Route::get('danhsachdaxacnhan','DatPhongController@getDanhSachDaXacNhan');
      Route::get('sua/{id}','DatPhongController@getSua');
      Route::post('sua/{id}','DatPhongController@postSua');
      Route::get('xem/{id}.html','DatPhongController@getXem');
     
  });
    //Slide
      Route::group(['prefix'=>'slide'],function(){
      //admin/slide/danhsach
      Route::get('danhsach','SlideController@getDanhSach');
      Route::get('sua/{id}','SlideController@getSua');
      Route::post('sua/{id}','SlideController@postSua');
      Route::get('them','SlideController@getThem');
      Route::post('them','SlideController@postThem');
      Route::get('xoa/{id}','SlideController@getXoa');
        //ăn uống
       
  });
   //Gioi Thieu
   Route::group(['prefix'=>'gioithieu'],function(){
    //admin/gioithieu/danhsach
    Route::get('danhsach','GioiThieuController@getDanhSach');
    Route::get('sua/{id}','GioiThieuController@getSua');
    Route::post('sua/{id}','GioiThieuController@postSua');
    Route::get('them','GioiThieuController@getThem');
    Route::post('them','GioiThieuController@postThem');
    Route::get('xoa/{id}','GioiThieuController@getXoa');
     
});
  Route::group(['prefix'=>'anuong'],function(){
    //admin/slide/danhsach
    Route::get('danhsach','AnUongController@getDanhSach');
    Route::get('sua/{id}','AnUongController@getSua');
    Route::post('sua/{id}','AnUongController@postSua');
    Route::get('them','AnUongController@getThem');
    Route::post('them','AnUongController@postThem');
    Route::get('xoa/{id}','AnUongController@getXoa');
  });
  //LiênHệ
  Route::group(['prefix'=>'lienhe'],function(){
    //admin/slide/danhsach
    Route::get('danhsach','LienHeController@getDanhSach');
    Route::get('xoa/{id}','LienHeController@getXoa');
  });
  //QuangCao
  Route::group(['prefix'=>'quangcao'],function(){
  //admin/slide/danhsach
  Route::get('danhsach','QuangCaoController@getDanhSach');
  Route::get('sua/{id}','QuangCaoController@getSua');
  Route::post('sua/{id}','QuangCaoController@postSua');
  Route::get('them','QuangCaoController@getThem');
  Route::post('them','QuangCaoController@postThem');
  Route::get('xoa/{id}','QuangCaoController@getXoa');

});
      Route::group(['prefix'=>'ajax'],function(){
      Route::get('loaitin/{idTheLoai}','AjaxController@getLoaiTin');
  });
});
   
    Route::get('tin-tuc/{id}/{TieuDeKhongDau}.html','PageController@chitiettintuc');
    //
    Route::get('trang-chu.html','PageController@trangchu');

    Route::get('tin-tuc.html','PageController@tintuc');

    Route::get('gioi-thieu.html','PageController@gioithieu');

    Route::get('chi-tiet-tin-tuc/{id}/{TieuDeKhongDau}.html','PageController@chitiettintuc1');

    Route::get('lien-he.html','PageController@lienhe');

    Route::post('lien-he.html','PageController@postlienhe');
    // 
    Route::get('loaitin/{id}/{TenKhongDau}.html','PageController@danhsachdiadiemdulich');

    Route::get('{id}/{TieuDeKhongDau}.html','PageController@chitiettintuc');

    Route::get('dia-diem-an-uong/{TenKhongDau}/{id}.html','PageController@danhsachdiadiemanuong');

    Route::get('an-uong/{id}/{TieuDeKhongDau}','PageController@anuong');
    
    Route::get('dang-nhap.html','PageController@getDangNhap');

    Route::post('dang-nhap.html','PageController@postDangNhap');

    Route::post('tim-kiem-tin-tuc.html','PageController@timkiem');

    Route::post('tim-kiem-khach-san.html','PageController@timkiemkhachsan');

    Route::post('tim-kiem-khach-san-theo-gia.html','PageController@timkiemkhachsantheogia');

    Route::post('sap-xep.html','PageController@sapxep');

    Route::get('thanh-toan/{id}/{TenKhongDau}.html','PageController@thanhtoan');

    Route::post('thanh-toan/{id}/{TenKhongDau}.html','PageController@postthanhtoan');

    Route::get('/ajax/loaitin','PageController@ajax');

    Route::get('khach-san.html','PageController@khachsan');

    Route::get('khach-san/{id}/{TenKhongDau}.html','PageController@chitietkhachsan');

    Route::get('dia-diem/{id}/{TenKhongDau}.html','PageController@diadiemdulich');

    Route::get('dien-dan.html','PageController@diendan');

    Route::get('chi-tiet/{id}/{TieuDeKhongDau}.html','PageController@chitietdiendan');

    Route::get('dien-dan-cau-hoi.html','PageController@cauhoi');

    Route::post('dien-dan-cau-hoi.html','PageController@postcauhoi');

    //  
    Route::get('test','PageController@test');

    Route::post('comment/{id}','CommentController@postcomment');

    Route::post('binhluan/{id}','CommentController@postbinhluan');

    Route::post('commentkhachsan/{id}','CommentController@postcommentkhachsan');

    Route::get('/redirect/{social}', 'SocialAuthController@redirect');

    Route::get('/callback/{social}', 'SocialAuthController@callback');

    Route::get('facebook/redirect', 'Auth\SocialController@redirectToProvider');

    Route::get('facebook/callback', 'Auth\SocialController@handleProviderCallback');

    Route::any('{all}', function($uri){
      return View::make('page.errors');
      })->where('all', '.*');

 