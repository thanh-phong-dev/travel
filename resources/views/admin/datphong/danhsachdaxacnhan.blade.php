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
         </div>
         <!-- end row -->
         <div class="row">
            <div class="col-12">
               <div class="card m-b-20">
                  <div class="card-body">
                     <h4 class="mt-0 header-title">Thông tin đặt phòng khách sạn</h4>
                     <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                           <tr>
                              <th>STT</th>
                              <th>Tên Khách Sạn</th>
                              <th>Loại Phòng</th>
                              <th>Tên người đặt phòng</th>
                              <th>Số điện thoại</th>
                              <th>Số ngày ở</th>
                              <th>Hình</th>
                              <th>Xem</th>
                              <th>Ngày đặt phòng</th>
                              <th>Ngày trả phòng</th>
                              <th>Thành tiền</th>
                              <th>Email</th>
                              <th>Trạng thái</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $i=1; ?>
                           @foreach($datphong as $tt)
                           <tr>
                              <?php
                                 ?>
                              <td> <?php echo $i; ?></td>
                              <td>{{$tt->phong->Ten}}</td>
                              <td>{{$tt->LoaiPhong}}</td>
                              <td>{{$tt->HoTen}}</td>
                              <td>{{$tt->SoDienThoai}}</td>
                              <td>{{$tt->SoNgayO}} ngày</td>
                              <td><img src="upload/khachsan/{{$tt->phong->Hinh}}" width="100px" height="70px" alt=""></td>
                              <td class="center"><i class="mdi mdi-eye"></i> <a href="admin/datphong/xem/{{$tt->id}}.html">Xem</a></td>
                              <td>{{$tt->NgayDat}}</td>
                              <td>{{$tt->NgayTra}}</td>
                              <td>{{$tt->ThanhTien}}</td>
                              <td>{{$tt->Email}}</td>
                              <td>
                                 @if($tt->TinhTrang==0)
                                 <p style="
                                    color: red;
                                    ">  {{"Đang chờ kiểm tra"}}</p>
                                 @else
                                 <p style="
                                    color: green;
                                    ">   {{"Đã xác nhận"}}</p>
                                 @endif
                              </td>
                           </tr>
                           <?php $i++; ?>
                           @endforeach
                        </tbody>
                     </table>
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
</div>
@endsection
<script type="text/javascript">
   function confirmAction() {
        return confirm("Bạn có chắc muốn xóa không?")
      }
</script>