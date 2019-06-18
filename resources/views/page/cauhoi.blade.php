@extends('admin.layout.indexuser')
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
               <h4 class="mt-0 header-title">Đăng câu hỏi của bạn</h4>
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
                     <form  action="dien-dan-cau-hoi.html" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group">
                           <label>Câu hỏi của bạn</label>
                           <div>
                              <input data-parsley-type="alphanum" type="text" name="Ten" class="form-control"
                                 required placeholder="Nhập câu hỏi của bạn">
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Người đăng</label>
                           <div><input data-parsley-type="alphanum" type="text" name="NguoiDang"  class="form-control"
                              required placeholder="" value="{{Auth::user()->name}}" readonly ></div>
                        </div>
                        <div class="form-group">
                           <div><button type="submit"
                              class="btn btn-primary waves-effect waves-light">Đăng</button>
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