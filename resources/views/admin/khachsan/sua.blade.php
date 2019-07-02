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
               <h4 class="mt-0 header-title">Cập nhật khách sạn</h4>
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
                     <form class="" action="admin/khachsan/sua/{{$tintuc->id}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group">
                           <label>Tên khách sạn</label>
                           <div><input data-parsley-type="alphanum" type="text" name="Ten" class="form-control"
                              required placeholder="Nhập tên khách sạn" value="{{$tintuc->Ten}}"></div>
                        </div>
                        <div class="form-group">
                           <label>Hình ảnh</label>
                           <p>
                              <img src="upload/khachsan/{{$tintuc->Hinh}}" width="90px" alt="">
                           </p>
                           <input type="file" name="Hinh">
                        </div>
                        <div class="form-group">
                           <label>Giá trung bình</label>
                           <div><input data-parsley-type="alphanum" type="text" name="Gia"  class="form-control"
                              required placeholder="Nhập giá trung bình" value="{{$tintuc->Gia}}"></div>
                        </div>
                        <div class="form-group">
                           <label>Số phòng</label>
                           <div><input data-parsley-type="alphanum" type="text" name="SoPhong"  class="form-control"
                              required placeholder="Nhập số phòng" value="{{$tintuc->SoPhong}}"></div>
                        </div>
                        <div class="form-group">
                           <label>Địa chỉ cụ thể</label>
                           <div><input data-parsley-type="alphanum" type="text" name="DiaChi"  class="form-control"
                              required placeholder="Nhập địa chỉ" value="{{$tintuc->DiaChi}}"></div>
                        </div>
                        <div class="form-group">
                           <label >Đánh giá</label>
                           <div class="">
                              <select class="form-control" name="Sao">
                                 @if($tintuc->Sao==1)
                                 <option value="1">1 sao</option>
                                 @elseif($tintuc->Sao==2)
                                 <option value="2">2 sao</option>
                                 @elseif($tintuc->Sao==3)
                                 <option value="3">3 sao</option>
                                 @elseif($tintuc->Sao==4)
                                 <option value="4">4 sao</option>
                                 @elseif($tintuc->Sao==5)
                                 <option value="4">5 sao</option>
                                 @endif
                                 <option value="2">1 sao</option>
                                 <option value="2">2 sao</option>
                                 <option value="3">3 sao</option>
                                 <option value="4">4 sao</option>
                                 <option value="5">5 sao</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Maps</label>
                           <div><input data-parsley-type="alphanum" type="text" name="Maps"  class="form-control"
                              required placeholder="Nhập địa chỉ trên google maps" value="{{$tintuc->Maps}}"></div>
                        </div>
                        <div class="form-group">
                           <label>Số điện thoại</label>
                           <div>
                              <input value="{{$tintuc->SoDienThoai}}" name="SoDienThoai"  type="text" class="form-control" required placeholder="Nhập số điện thoại">
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Hoạt động</label><br/>
                           <label class="radio-inline">
                           <input name="HienThi" value="1"
                           @if($tintuc->HienThi==1)
                           {{"checked"}}
                           @endif
                           checked="" type="radio">Đang hoạt động
                           </label><br/>
                           <label class="radio-inline">
                           <input name="HienThi" value="0"
                           @if($tintuc->HienThi==0)
                           {{"checked"}}
                           @endif
                           type="radio">Ngừng hoạt động
                           </label>
                        </div>
                        <div class="form-group">
                           <label>Nổi bật</label><br/>
                           <label class="radio-inline">
                           <input name="NoiBat" value="0"
                           @if($tintuc->NoiBat==0)
                           {{"checked"}}
                           @endif
                           checked="" type="radio">Không
                           </label><br/>
                           <label class="radio-inline">
                           <input name="NoiBat" value="1"
                           @if($tintuc->NoiBat==1)
                           {{"checked"}}
                           @endif
                           type="radio">Có
                           </label>
                        </div>
                        {{-- <script>CKEDITOR.replace('TomTat');</script> --}}
                        <div class="form-group">
                           <label>Mô tả</label>
                           <textarea id="TomTat" class="form-control" rows="3" name="TomTat">{{$tintuc->TomTat}}</textarea>
                        </div>
                        <div class="form-group">
                           <label>Mô tả chi tiết</label>
                           <textarea id="NoiDung" class="form-control" rows="3" name="NoiDung">{{$tintuc->NoiDung}}</textarea>
                        </div>
                        <script>CKEDITOR.replace('NoiDung',{
                           filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                           filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                           filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                           filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                           filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
                           });
                        </script>
                        <div class="form-group">
                           <div><button type="submit"
                              class="btn btn-primary waves-effect waves-light">Sửa</button>
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