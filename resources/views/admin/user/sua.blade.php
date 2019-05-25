@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>{{$user->name}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
              @if(count($errors)>0)
                @foreach($errors ->all as $err)
                  {{$err}}<br>
                @endforeach
              @endif

              @if(session('thongbao'))
                <div class="alert aler-sucess">
                  {{session('thongbao')}}
              @endif
                <form action="" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" name="username" value="{{$user->name}}"  />
                    </div>
                    <div class="form-group">
                      <input type="checkbox" id="changePassword" name="changePassword" value="">
                        <label>Đổi Password</label>
                        <input type="password" class="form-control
                        password" name="matkhau" placeholder="Vui lòng nhập khẩu" />
                    </div>
                    <div class="form-group">
                        <label>Nhập lại mật khẩu</label>
                        <input type="password" class="form-control
                        password" name="nhaplaimatkhau" placeholder="Vui lòng nhập lại mật khẩu"/>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" value="{{$user->email}}"  class="form-control" name="email" placeholder="Vui lòng nhập Email" />
                    </div>
                    <div class="form-group">
                        <label>Quyền</label>
                        <label class="radio-inline">
                            <input
                            @if($user->quyen==0)
                              {{"checked"}}
                            @endif
                             name="quyen" value="0" checked="" type="radio">Người dùng
                        </label>
                        <label class="radio-inline">
                            <input
                            @if($user->quyen==1)
                              {{"checked"}}
                            @endif
                             name="quyen" value="1" type="radio">Admin
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Ok</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection

@section('script')
  <script type="text/javascript">
    $(document).ready(function(){
      $("#changePassword").change(function(){
        if($(this).is(":checked"))
        {
          $(".password").removeAttr('disabled');
        }
        else {
          $(".password").attr('disabled','');
        
        
        }
      });
    });
  </script>
@endsection
