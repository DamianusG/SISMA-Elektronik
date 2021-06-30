<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <!-- STYLE --> 
  @stack('before-stack')
  @include('includes.style')
  @stack('after-stack')
</head>
<body>
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include('includes.navbar')
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  @include('includes.sidebar')
  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
  <!-- Main content -->
  @yield('content')
  <!-- /.content -->
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
<!-- SCRIPT -->
@stack('before-script')
@include('includes.script')
@stack('after-script')
</body>
</html>
