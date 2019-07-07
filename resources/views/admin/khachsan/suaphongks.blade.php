@extends('admin.layout.index')
@section('content')
<div class="content-page">
<!-- Start content -->
<div class="content">
<div class="container-fluid">
   <div class="row">                
   </div>
   <!-- end row -->
   <div class="row">
      <div class="col-lg-12">
         <div class="card m-b-20">
            <div class="card-body">
               <h4 class="mt-0 header-title">Cập nhật phòng khách sạn</h4>
               @if(count($errors)>0)
               <div class="alert alert-danger">
                  @foreach($errors->all() as $err)
                  {{$err}}<br>
                  @endforeach
                  @endif
                  @if(session('thongbao'))
                  <div class="alert alert-success">
                     {{session('thongbao')}}
                     @endif
                     <form class="" action="admin/khachsan/suaphong/{{$phongkhachsan->id}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group">
                           <label>Tên khách sạn</label>
                           <div><input data-parsley-type="alphanum" type="text" name="TenPhong" class="form-control"
                              required placeholder="Nhập tên khách sạn" value="{{$phongkhachsan->TenPhong}}"></div>
                        </div>
                        <div class="form-group">
                           <label>Hình ảnh</label>
                           <p>
                              <img src="upload/khachsan/{{$phongkhachsan->Hinh}}" width="90px" alt="">
                           </p>
                           <input type="file" name="Hinh">
                        </div>
                        <div class="form-group">
                           <label>Giá phòng</label>
                           <div><input data-parsley-type="alphanum" type="text" name="Gia"  class="form-control"
                              required placeholder="Nhập giá phòng" value="{{$phongkhachsan->Gia}}"></div>
                        </div>
                        <div class="form-group">
                              <label>Giá phòng cuối tuần</label>
                              <div><input data-parsley-type="alphanum" type="text" name="GiaCuoiTuan"  class="form-control"
                                 required placeholder="Nhập giá phòng" value="{{$phongkhachsan->GiaCuoiTuan}}"></div>
                           </div>
                        <div class="form-group">
                           <label>Số người ở</label>
                           <div><input data-parsley-type="alphanum" type="text" name="SoNguoi"  class="form-control"
                              required placeholder="Nhập số người" value="{{$phongkhachsan->SoNguoi}}"></div>
                        </div>
                        <div class="form-group">
                           <label>Người lớn</label>
                           <div><input data-parsley-type="alphanum" type="text" name="NguoiLon"  class="form-control"
                              required placeholder="Nhập" value="{{$phongkhachsan->NguoiLon}}"></div>
                        </div>
                        <div class="form-group">
                           <label>Trẻ em</label>
                           <div><input data-parsley-type="alphanum" type="text" name="TreEm"  class="form-control"
                              required placeholder="Nhập " value="{{$phongkhachsan->TreEm}}"></div>
                        </div>
                        <div class="form-group">
                           <label>Số phòng</label>
                           <div><input data-parsley-type="alphanum" type="text" name="SoPhong"  class="form-control"
                              required placeholder="Nhập " value="{{$phongkhachsan->SoPhong}}"></div>
                        </div>
                        <div class="form-group">
                           <div><button type="submit"
                              class="btn btn-primary waves-effect waves-light">Cập nhật</button>
                              <button type="reset"
                                 class="btn btn-secondary waves-effect m-l-5">Hủy</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <!-- end col -->
            <!-- end col -->
         </div>
         <!-- end row -->
      </div>
      <!-- container-fluid -->
   </div>
   <!-- content -->
</div>
<script>
   let today = new Date().toISOString().substr(0, 10);
   document.querySelector("#today").value = today;
</script>
<script type="text/javascript">
   $(function () {
       $("#TieuDe").keyup(function () {
           var text = $.trim($(this).val().toLowerCase());
       $('#SEOTitle').val(text);
       }).keyup();
   });
</script>
<script>
@endsection