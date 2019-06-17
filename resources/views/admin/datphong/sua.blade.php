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
               <h4 class="mt-0 header-title">Cập nhật thông tin đặt phòng</h4>
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
                     <form  action="admin/datphong/sua/{{$datphong->id}}" method="POST"  enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group">
                           <label>Tên người đặt phòng</label>
                           <div>
                              <input data-parsley-type="alphanum" type="text" name="HoTen" class="form-control"
                                 required placeholder="" value="{{$datphong->HoTen}}">
                           </div>
                           <input type="hidden" name="idkhachsan" value="{{$datphong->Idkhachsan}}">
                           <input type="hidden" name="NgayDat" value="{{$datphong->NgayDat}}">
                           <input type="hidden" name="NgayTra" value="{{$datphong->NgayTra}}">
                           <input type="hidden" name="SoNgayO" value="{{$datphong->SoNgayO}}">
                           <input type="hidden" name="LoaiPhong" value="{{$datphong->LoaiPhong}}">
                           <input type="hidden" name="ThanhTien" value="{{$datphong->ThanhTien}}">
                           <input type="hidden" name="Email" value="{{$datphong->Email}}">
                           <input type="hidden" name="SDT" value="{{$datphong->SoDienThoai}}">
                        </div>
                        <div class="form-group">
                           <label>Trạng Thái</label><br/>
                           <label class="radio-inline">
                           <input name="TinhTrang" value="1"
                           @if($datphong->TinhTrang==1)
                           {{"checked"}}
                           @endif
                           checked="" type="radio">Đã xác nhận
                           </label><br/>
                           <label class="radio-inline">
                           <input name="TinhTrang" value="0"
                           @if($datphong->TinhTrang==0)
                           {{"checked"}}
                           @endif
                           type="radio">Đang kiểm tra
                           </label>
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
@endsection