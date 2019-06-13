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
                                    <h4 class="mt-0 header-title">Thông tin đặt phòng khách sạn</h4>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Tên người đặt</th>
                                                <th>Loại Phòng</th>
                                                <th>Trạng thái</th>
                                                <th>Cập nhật</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php $i=0; ?>
                                                <tr>
                                                <th>{{$datphong->HoTen}}</th>
                                                <td>{{$datphong->LoaiPhong}}</td>
                                                <td>@if($datphong->TinhTrang==0)
                                                    <p style="
                                                    color: red;
                                                      ">  {{"Đang chờ kiểm tra"}}</p>
                                                @else
                                                <p style="
                                                color: green;
                                                ">   {{"Đã xác nhận"}}</p>
                                             
                                                @endif
                                                </td>
                                                <td class="center"><i class="mdi mdi-table-edit"></i> <a href="admin/datphong/sua/{{$datphong->id}}" style="
                                                    color: blue;">Cập nhật </td>
                                            </tr>
                                            <?php $i++; ?>
                                           
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
  