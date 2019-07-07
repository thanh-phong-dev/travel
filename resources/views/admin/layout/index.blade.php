<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Admin Du lịch Việt Nam</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <base href="{{asset('')}}">
    <link rel="shortcut icon" href="Admin_MonNgonViet/assets/images/favicon.ico"><!-- DataTables -->
    <link href="Admin_MonNgonViet/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="Admin_MonNgonViet/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!-- Responsive datatable examples -->
    <link href="Admin_MonNgonViet/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="Admin_MonNgonViet/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="Admin_MonNgonViet/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="Admin_MonNgonViet/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="Admin_MonNgonViet/assets/css/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="admin_asset/ckeditor/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.8.3.js"></script>
</head>
<body>
{{-- thanhotren --}}
<div id="wrapper">
@include('admin.layout.menu')
@yield('content')
</div>

<footer class="footer">© 2019 Du lịch Việt Nam - <span class="d-none d-sm-inline-block">Thiết kế và xây dựng<i
    class="mdi mdi-heart text-danger"></i> by Thanh Phong (Hutech)</span>.</footer>
</div><!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
</div><!-- END wrapper -->
<!-- jQuery  -->
<script src="Admin_MonNgonViet/assets/js/jquery.min.js"></script>
<script src="Admin_MonNgonViet/assets/js/bootstrap.bundle.min.js"></script>
<script src="Admin_MonNgonViet/assets/js/metisMenu.min.js"></script>
<script src="Admin_MonNgonViet/assets/js/jquery.slimscroll.js"></script>
<script src="Admin_MonNgonViet/assets/js/waves.min.js"></script>
<script src="Admin_MonNgonViet/plugins/jquery-sparkline/jquery.sparkline.min.js"></script><!-- Required datatable js -->
<script src="Admin_MonNgonViet/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="Admin_MonNgonViet/plugins/datatables/dataTables.bootstrap4.min.js"></script><!-- Buttons examples -->
<script src="Admin_MonNgonViet/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="Admin_MonNgonViet/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="Admin_MonNgonViet/plugins/datatables/jszip.min.js"></script>
<script src="Admin_MonNgonViet/plugins/datatables/pdfmake.min.js"></script>
<script src="Admin_MonNgonViet/plugins/datatables/vfs_fonts.js"></script>
<script src="Admin_MonNgonViet/plugins/datatables/buttons.html5.min.js"></script>
<script src="Admin_MonNgonViet/plugins/datatables/buttons.print.min.js"></script>
<script src="Admin_MonNgonViet/plugins/datatables/buttons.colVis.min.js"></script><!-- Responsive examples -->
<script src="Admin_MonNgonViet/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="Admin_MonNgonViet/plugins/datatables/responsive.bootstrap4.min.js"></script><!-- Datatable init js -->
<script src="Admin_MonNgonViet/assets/pages/datatables.init.js"></script><!-- App js -->
<script src="Admin_MonNgonViet/assets/js/app.js"></script>
{{--  --}}
@yield('script')
</body>
</html>