@extends('admin.layout.index')
@section('content')
    <!-- Begin page -->
 
        <!-- Top Bar Start -->
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                    </div><!-- end row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-20">
                                <div class="card-body">
                                <h4 class="mt-0 header-title">Danh sách phòng khách sạn của {{$khachsan->Ten}}</h4>
                                
                                <a href="admin/khachsan/themphongks/{{$khachsan->id}}"><button class="btn btn-info">Thêm phòng</button> </a>
                                <br/>
                                <br/>

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên phòng</th>
                                                <th>Hình ảnh</th>
                                                <th>Giá</th>
                                                <th>Giá cuối tuần</th>
                                                <th>Số người</th>
                                                <th>Người lớn</th>
                                                <th>Trẻ em</th>
                                                <th>Cập nhật</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php $i=1; ?>
                                                @foreach($phongkhachsan as $pks)
                                                <tr>
                                                <td> <?php echo $i; ?></td>
                                                <td>{{$pks->TenPhong}}</td>
                                                <td><img src="upload/khachsan/{{$pks->Hinh}}" width="100px" height="70px" alt=""></td>
                                                <?php 
                                                $num = $pks->Gia;  
                                                $formattedNum = number_format($num);?>
                                                <td>{{ $formattedNum}} VNĐ</td>
                                                <?php 
                                                $num = $pks->GiaCuoiTuan;  
                                                $formattedNum = number_format($num);?>
                                                <td>{{ $formattedNum}} VNĐ</td>
                                                <td>{{$pks->SoNguoi}} người</td>
                                                <td>{{$pks->NguoiLon}} người</td>
                                                <td>{{$pks->TreEm}} người</td>
                                                <td class="center"><i class="mdi mdi-table-edit"></i> <a href="admin/khachsan/suaphong/{{$pks->id}}" style="
                                                color: blue;">Cập nhật | <a  href="admin/khachsan/xoaphongkhachsan/{{$pks->id}}/{{$pks->khachsan->id}}" style="
                                                color: red;
                                                " onclick="return confirmAction()" >Xóa</a></a></td>
                                                <?php $i++; ?>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- container-fluid -->
            </div><!-- content -->
        </div>
            @endsection
            <script type="text/javascript">
                function confirmAction() {
                     return confirm("Bạn có chắc muốn xóa không?")
                   }
              </script>
  