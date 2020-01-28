<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin| Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- css  -->
  @include('admin.layout.css')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    @include('admin.layout.header')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('admin.layout.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <!-- /.content-header -->

  <!-- Main content -->
  @yield('content')
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@include('admin.layout.footer')

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- JS -->
@include('admin.layout.js')
@include('sweetalert::alert')
</body>
</html>
