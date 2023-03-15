<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('assets/images/lrulogo.ico') }}">
    <title>LOGIN-INVEN</title>

    

    <!-- Styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link href="{{ URL::to('assets/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/plugins/bootstrap-toggle/bootstrap-toggle.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/plugins/toastr/toastr.min.css') }}" rel="stylesheet">

     {{-- message toastr --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

</head>
<body>
    <div id="app">
                                                                                                                                                                                                                                                  
        <main class="py-4">
            @yield('content')
        </main>
    </div> 




    <!-- OPTIONAL SCRIPTS -->
    
    <script src="{{ URL::to('assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{ URL::to('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ URL::to('assets/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{ URL::to('assets/plugins/toastr/toastr_jquery.min.js') }}"></script>

    @yield('script')
</body>
</html>
