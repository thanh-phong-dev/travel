@extends('admin.layout.index')
@section('content')
<div class="content-page">
<!-- Start content -->
<div class="content">
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <div class="page-title-box">
            <h4 class="page-title">Thêm khách sạn</h4>
            <ol class="breadcrumb">
            </ol>
            
         </div>
      </div>
   </div>
   <!-- end row -->
   <div class="row">
      <div class="col-lg-12">
         <div class="card
            m-b-20">
            <div class="card-body">
               <h4 class="mt-0 header-title">Khách sạn</h4>
               <p class="text-muted
                  m-b-30">Nhập thông tin khách sạn</p>
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
                     <form  action="admin/khachsan/them" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group">
                           <label>Tên khách sạn</label>
                           <input type="text" name="Ten" id="Ten" class="form-control" required placeholder="Nhập tên khách sạn">
                        </div>
                        <div class="form-group">
                           <label>Hình ảnh</label><br/>
                           <input type="file" name="Hinh" required>
                        </div>
                        <div class="form-group">
                           <label>Mô tả</label>
                           <textarea id="TomTat" class="form-control" rows="3" name="TomTat" required></textarea>
                        </div>
                        <div class="form-group">
                           <label>Mô tả chi tiết</label>
                           <textarea id="NoiDung" class="form-control" rows="3" name="NoiDung" required></textarea>
                        </div>
                        <script>CKEDITOR.replace('NoiDung',{
                           filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                           filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                           filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                           filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                           filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
                           });
                        </script>
                        <div class="form-group">
                           <label>Giá trung bình
                           </label>
                           <div>
                              <input type="text" name="Gia" id="pass2" class="form-control" required placeholder="Nhập giá trung bình của khách sạn">
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Giá cuối tuần
                           </label>
                           <div>
                              <input type="text" name="GiaCuoiTuan" id="pass2" class="form-control" required placeholder="Nhập giá cuối tuần của khách sạn">
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Số phòng</label>
                           <div>
                              <input type="text" name="SoPhong" class="form-control" required  placeholder="Nhập số phòng">
                           </div>
                        </div>
                        <div class="form-group">
                           <label >Vị trí</label>
                           <div class="">
                              <select class="form-control" name="idDiaDiem">
                                 @foreach($loaitin as $tl)
                                 <option value="{{$tl->id}}">{{$tl->Ten}}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Địa chỉ cụ thể</label>
                           <div>
                              <input type="text" name="DiaChi" class="form-control" required  placeholder="Nhập địa chỉ cụ thể">
                           </div>
                        </div>
                        <div class="form-group">
                           <label >Đánh giá</label>
                           <div class="">
                              <select class="form-control" name="Sao">
                                 <option value="1">1 sao</option>
                                 <option value="2">2 sao</option>
                                 <option value="3">3 sao</option>
                                 <option value="4">4 sao</option>
                                 <option value="5">5 sao</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Maps</label>
                           <div>
                              <input name="Maps" id="Maps" type="text" class="form-control" required placeholder="Nhập địa chỉ trên google maps">
                           </div>
                        </div>
                    
                        <div class="form-group">
                           <label>Số điện thoại</label>
                           <div>
                              <input name="SoDienThoai" type="text" class="form-control" required placeholder="Nhập số điện thoại">
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Từ Khóa</label>
                           <div><input data-parsley-type="alphanum" type="text" name="SEOTitle" id="SEOTitle" class="form-control"
                              required placeholder="Nhập tên từ khóa"></div>
                        </div>
                        <div class="form-group">
                           <label>Hiển thị</label><br/>
                           <label class="radio-inline">
                           <input name="HienThi" value="1" checked="" type="radio">Có
                           </label><br/>
                           <label class="radio-inline">
                           <input name="HienThi" value="0" type="radio">Không
                           </label>
                        </div>
                        <div class="form-group">
                           <label>Nổi bật</label><br/>
                           <label class="radio-inline">
                           <input name="NoiBat" value="1" checked="" type="radio">Có
                           </label><br/>
                           <label class="radio-inline">
                           <input name="NoiBat" value="0" type="radio">Không
                           </label>
                        </div>
                        <div class="form-group">
                           <div>
                              <button type="submit" class="btn
                                 btn-primary waves-effect
                                 waves-light">Thêm</button>
                              <button type="reset" class="btn btn-secondary
                                 waves-effect m-l-5">Hủy</button>
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
   <footer class="footer">© 2018 Lexa - <span class="d-none
      d-sm-inline-block">Crafted with <i class="mdi mdi-heart
      text-danger"></i> by Themesbrand</span>.</footer>
</div>
@endsection
@section('script')

<script type="text/javascript">
   $(function () {
       $("#Ten").keyup(function () {
           var text = $.trim($(this).val().toLowerCase());
       $('#SEOTitle').val(text);
       }).keyup();
   });
</script> 
<script type="text/javascript">
   $(function () {
       $("#Maps").keyup(function () {
           var text = $.trim($(this).val().toLowerCase());
       $('#DiaChiMaps').val(text);
       }).keyup();
   });
</script>
<script>
   let today = new Date().toISOString().substr(0, 10);
   document.querySelector("#today").value = today;
</script>
@endsection