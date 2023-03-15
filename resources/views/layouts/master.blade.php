<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <meta name="description" content="soengsouy - Bootstrap Admin Template">
		  <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
      <meta name="author" content="soengsouy">
      <meta name="robots" content="noindex, nofollow">

      <title>@yield('tile')</title>
      <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('assets/images/lrulogo.ico') }}">
      <!-- stylesheet -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
      <link rel="stylesheet" href="{{ URL::to('assets/plugins/fontawesome-free/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ URL::to('assets/css/adminlte.min.css') }}">
      {{-- <link rel="stylesheet" href="{{ URL::to('assets/plugins/sweetalert2/sweetalert2.min.css') }}"> --}}
      <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
     
      <!-- Datatables -->
      <link rel="stylesheet" href="{{ URL::to('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">


    {{-- message toastr --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
      
</head>
<body class="hold-transition sidebar-mini">
  

  <div class="wrapper">
    @include('sweetalert::alert')
    <!-- Navbar -->
    @include('navbar.navbar')
    <!--end navbar-->
    <!--sidebar-->
    @include('sideber.sideber')
    <!--end sidebar-->
        <div class="content-wrapper pt-3">
            <!-- Main content -->
      
                @yield('content')
        
        </div> 
    <!--footer-->  
   @include('sideber.footer')
    <!--end footer-->  
</div>


<!-- SCRIPTS -->
<script src="{{ URL::to('assets/plugins/jquery/jquery.js')}}"></script>
<script src="{{ URL::to('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::to('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::to('assets/js/adminlte.min.js') }}"></script>

{{-- toastr --}}

{{-- <script src="{{ URL::to('assets/plugins/toastr/toastr_jquery.min.js') }}"></script> --}}

<!-- OPTIONAL SCRIPTS -->
<script src="{{ URL::to('assets/plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ URL::to('assets/plugins/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js') }}"></script>

<!-- datatables -->
<script src="{{ URL::to('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::to('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ URL::to('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::to('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

{{-- <script src="{{ URL::to('//cdn.jsdelivr.net/npm/sweetalert2@11')}}"></script> --}}

@yield('script')

</body>
</html>
