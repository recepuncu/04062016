<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TRT Turizm ve Belgesel Kanalı</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

  <link rel="stylesheet" href="{{ asset('plugins/datepicker/datepicker3.css') }}">
  <link rel="stylesheet" href="{{ asset('includes/style.css') }}">

  <link rel="stylesheet" href="{{ asset('font-awesome-4.5.0/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('ionicons-2.0.1/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/skins/skin-blue.min.css') }}">
  <!--[if lt IE 9]>
  <script src="{{ asset('dist/js/html5shiv.min.js') }}"></script>
  <script src="{{ asset('dist/js/respond.min.js') }}"></script>
  <![endif]-->
  <!-- jQuery 2.2.0 -->
  <script src="{{ asset('plugins/jQuery/jQuery-2.2.0.min.js') }}"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('plugins/datepicker/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('plugins/datepicker/locales/bootstrap-datepicker.tr.js') }}"></script>

  <script src="{{ asset('plugins/input-mask/jquery.inputmask.js') }}"></script>
  <script src="{{ asset('plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
  <script src="{{ asset('plugins/input-mask/jquery.inputmask.numeric.extensions.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('dist/js/app.min.js') }}"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  @include ('layouts.header')
  @include('layouts.left-nav')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	@yield('page-header')
	@yield('body')
    
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.footer')
  @include('layouts.right-side')
</div>
<!-- ./wrapper -->
</body>
</html>