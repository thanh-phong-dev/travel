@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Địa Điểm Ăn Uống
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
              @if(count($errors)>0)
                <div class="alert aler-danger">
                  @foreach($errors->all() as $err)
                      {{$err}}<br>
                  @endforeach
              @endif

              @if(session('thongbao'))
                <div class="alert aler-sucess">
                  {{session('thongbao')}}
              @endif
                <form action="admin/anuong/them" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label>Tiêu Đề</label>
                        <input class="form-control" name="TieuDe" placeholder="Nhập tên thể loại ở đây" />
                    </div>
                    <div class="form-group">
                        <label>Tóm Tắt</label>
                        <input class="form-control" name="TomTat" id="TomTat" />
                    </div>
                
                    <div class="form-group">
                        <label>Nội Dung</label>
                        <input class="form-control" name="NoiDung" id="NoiDung" />
                    </div>
                 
                    <div class="form-group">
                        <label>Hình</label>
                        <input type="file" class="form-control" name="Hinh" />
                    </div>


                    <div class="form-group">
                        <label>Ẩn/Hiển Thị</label><br>
                        <label class="radio-inline">
                            <input name="Hide" value="0" checked="" type="radio">Ẩn
                        </label>
                        <label class="radio-inline">
                            <input name="Hide" value="1" type="radio">Hiển Thị
                        </label>
                    </div>
                    <div class="form-group">
                                        <label>Thể loại</label>
                                        <select class="form-control" name="loai" id="TheLoai">
                                            
                                            <option value="0">Món ngon Đà Lạt</option>
                                            
                                        </select>
                                    </div>
                  
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
