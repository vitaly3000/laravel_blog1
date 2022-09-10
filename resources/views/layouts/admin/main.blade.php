
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Adminka</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin_assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin_assets/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('admin_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('admin_assets/plugins/daterangepicker/daterangepicker.css') }}">

  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('admin_assets/plugins/summernote/summernote-bs4.min.css') }}">

  <link rel="stylesheet" href="{{ asset('build/css/index.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('admin_assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('layouts.admin.includes.navbar')
  <!-- /.navbar -->

  <!-- Сайдбар -->
  @include('layouts.admin.includes.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Шапка контента -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           @yield('content-title')
          </div>
          <div class="col-sm-6">
            @include('layouts.admin.includes.breadcrumb')
          </div>
        </div>
      </div>
    </div>
    <!-- Шапка контента -->

    <!-- Контент -->
    <section class="content">
      <div class="container-fluid">
        <!-- Карточки -->
        @include("layouts.admin.includes.cards")
        <!-- Карточки -->
        <!-- Контент -->
            @yield('content')
        <!-- Контент -->
      </div>
    </section>
    <!-- Контент -->
  </div>
  <!-- Футер -->
  @include('layouts.admin.includes.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('admin_assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('admin_assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>


<!-- Bootstrap 4 -->
<script src="{{ asset('admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('admin_assets/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('admin_assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('admin_assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('admin_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

<!-- bs-custom-file-input -->
<script src="{{ asset('admin_assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin_assets/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin_assets/dist/js/demo.js') }}"></script>
{{-- <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('admin_assets/dist/js/pages/dashboard.js') }}"></script> --}}
<!-- Summernote -->
<script src="{{ asset('admin_assets/plugins/summernote/summernote-bs4.min.js') }}"></script>

<script>
    $(document).ready(function(){
        $('#post-content').summernote();

        bsCustomFileInput.init();
    });
</script>
</body>
</html>
