<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>RealSource</title>

	<link href="{{ URL::asset('assets/vendor/font-awesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap-theme.css')}}" rel="stylesheet">
	<link href="{{ URL::asset('assets/vendor/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('assets/vendor/owlcarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <!--link href="{{ URL::asset('assets/vendor/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet"-->
    <link href="{{ URL::asset('assets/vendor/timepicker/jquery.timepicker.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/fine-uploader/fine-uploader-new.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/linearicons/WebFont/style.css')}}">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">



</head>

<body id="page-top">
        @yield('content')
    <!-- Bootstrap core JavaScript -->
    <script src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/jquery-ui/jquery-ui.js') }}" type="text/javascript"></script>

    <script src="{{ URL::asset('assets/vendor/popper/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <script src="{{ URL::asset('assets/js/bootstrap-input-spinner.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/vendor/timepicker/jquery.timepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/vendor/owlcarousel/owl.carousel.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/vendor/wow/wow.js') }}"></script>
    <script>new WOW().init();</script>
    <script src="{{ URL::asset('assets/vendor/fine-uploader/fine-uploader.js')}}"></script>
    
    <script src="{{ URL::asset('assets/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/jquery-validation/dist/additional-methods.min.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/font-awesome/js/fontawesome.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/jquery-parallax.js/parallax.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/scrollup/src/jquery.scrollUp.js') }}"></script>
    <script src="{{ URL::asset('assets/js/custom.js') }}" type="text/javascript"></script>
    

    <!-- Start of  Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=105d36eb-da7c-4087-acdd-2cfd2c2f2df2"> </script>
    <!-- End of  Zendesk Widget script -->
    @yield('scripts')
    

</body>

</html>