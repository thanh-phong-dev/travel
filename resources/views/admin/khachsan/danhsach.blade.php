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
                                    <h4 class="mt-0 header-title">Danh sách khách sạn của hệ thống</h4>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên khách sạn</th>
                                                <th>Giá phòng</th>
                                                <th>Đánh giá</th>
                                                <th>Địa Chỉ</th>
                                                <th>Hình</th>
                                                <th>Xem</th>

                                                <th>Hoạt động</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php $i=1; ?>
                                                @foreach($khachsan as $tt)
                                                <tr>
                                                <td> <?php echo $i; ?></td>
                                                <td>{{$tt->Ten}}</td>
                                                <?php 
                                                $num = $tt->Gia;  
                                                $formattedNum = number_format($num);?>
                                                <td>{{ $formattedNum}} <sup>đ</sup></td>
                                                <td>{{$tt->Sao}} Sao</td>

                                                <td>{{$tt->DiaChi}}</td>
                                                <td><img src="upload/khachsan/{{$tt->Hinh}}" width="100px" height="70px" alt=""></td>
                                                <td class="center"><i class="mdi mdi-eye"></i> <a href="admin/khachsan/xem/{{$tt->id}}">Xem</a></td>
                                                <td>@if($tt->HienThi==1)
                                                   <p style="
                                                   color: green;
                                               "> {{"Đang hoạt động"}}</p> 
                                                @else
                                                <p style="
                                                color: red;
                                                  "> {{"Ngừng hoạt động "}}</p>
                                               
                                                @endif
                                                </td>
                                                <td class="center"><i class="mdi mdi-table-edit"></i> <a href="admin/khachsan/sua/{{$tt->id}}" style="
                                                    color: blue;">Cập nhật </a></td>
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
  