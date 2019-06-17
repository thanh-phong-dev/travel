@extends('admin.layout.index')
@section('content')
<div class="content-page">
<!-- Start content -->
<div class="content">
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <div class="page-title-box">
            <h4 class="page-title">Thêm phòng khách sạn</h4>
            <ol class="breadcrumb">
            </ol>
         </div>
      </div>
   </div>
   <!-- end row -->
   <div class="row">
      <!-- end col -->
      <div class="col-lg-12">
         <div class="card m-b-20">
            <div class="card-body">
               <h4 class="mt-0
                  header-title">Phòng khách sạn</h4>
               <p class="text-muted m-b-30">
                  Nhập thông tin phòng khách sạn
               </p>
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
                     <form action="admin/khachsan/themphongks" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group">
                           <label>Tên Phòng</label>
                           <select class="form-control" name="idkhachsan" >
                              <option value="{{$khachsan->id}}">{{$khachsan->Ten}}</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label>Tên mỗi phòng của khách sạn
                           </label>
                           <div>
                              <input type="text" name="TenPhong" class="form-control" required placeholder="Nhập tên phòng">
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Hình ảnh</label><br/>
                           <input type="file" name="Hinh" required>
                        </div>
                        <div class="form-group">
                           <label>Giá phòng
                           </label>
                           <div>
                              <input type="text" name="Gia" class="form-control" required  placeholder="Nhập giá phòng">
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Số Phòng
                           </label>
                           <div>
                              <input type="text" name="SoPhong" class="form-control" required  placeholder="Nhập số phòng">
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Số người ở
                           </label>
                           <div>
                              <input type="text" name="SoNguoi" class="form-control" required  placeholder="Nhập số người ở">
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Số người lớn
                           </label>
                           <div>
                              <input type="text" name="NguoiLon" class="form-control" required  placeholder="Nhập số lượng người lớn">
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Số trẻ em
                           </label>
                           <div>
                              <input type="text" name="TreEm" class="form-control" required  placeholder="Nhập số lượng trẻ em">
                           </div>
                        </div>
                        <div class="form-group m-b-0">
                           <div>
                              <button type="submit" class="btn
                                 btn-primary waves-effect
                                 waves-light">Thêm</button>
                              <button type="reset" class="btn btn-secondary
                                 waves-effect m-l-5">Cancel</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <!-- end col -->
         </div>
         <!-- end row -->
      </div>
      <!-- container-fluid -->
   </div>
   <!-- content -->
   <footer class="footer">© 2018 Lexa - <span class="d-none
      d-sm-inline-block">Crafted with <i class="mdi mdi-heart
      text-danger"></i> by Themesbrand</span>.</footer>
</div>
@endsection
@section('script')
{{-- <script type="text/javascript">
   $(document).ready(function() {
       $("#TheLoai").change(function() {
           var idTheLoai = $(this).val();
           $.get("admin/ajax/loaitin/" + idTheLoai, function(data) {
               $("#LoaiTin1").html(data);
           });
       });
   });
</script>
<script type="text/javascript">
   $(function () {
       $("#TieuDe").keyup(function () {
           var text = $.trim($(this).val().toLowerCase());
       $('#SEOTitle').val(text);
       }).keyup();
   });
</script> --}}
<script>
   let today = new Date().toISOString().substr(0, 10);
   document.querySelector("#today").value = today;
</script>
@endsection