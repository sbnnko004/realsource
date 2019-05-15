<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('assets/images/apple-touch-icon.png')}}">
		<link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('assets/images/favicon-32x32.png')}}">
		<link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('assets/images/favicon-16x16.png')}}">
		<link rel="manifest" href="{{ URL::asset('assets/images/site.webmanifest')}}">
		<link rel="mask-icon" href="{{ URL::asset('assets/images/safari-pinned-tab.svg')}}" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<title>{{ config('app.name', 'RealSource') }} Admin - Tables</title>

		<!-- Custom fonts for this template-->
		<link href="{{ URL::asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

		<!-- Page level plugin CSS-->
		
		<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
		<!-- Custom styles for this template-->
		<link href="{{ URL::asset('assets/css/sb-admin.css') }}" rel="stylesheet">
		<link href="{{ URL::asset('assets/css/custom.css') }}" rel="stylesheet">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	</head>

	<body id="page-top">

        @yield('content')

		<!--div id="dialog-confirm" title="Delete from database?">
			<p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span id = "dialog-message">The entry will be permanently deleted from the database. Are you sure?</p>
		</div-->

		<!-- Bootstrap core JavaScript-->
		<script src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

		<script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

		<!-- Core plugin JavaScript-->
		<script src="{{ URL::asset('assets/vendor/easing/easing.min.js') }}"></script>

		<!-- Page level plugin JavaScript-->
		<script src="{{ URL::asset('assets/vendor/datatables/jquery.dataTables.js') }}"></script>
		<script src="{{ URL::asset('assets/vendor/datatables/dataTables.bootstrap4.js') }}"></script>

		<!-- Custom scripts for all pages-->
        <script src="{{ URL::asset('assets/js/sb-admin.min.js') }}"></script>

		<!-- For Datatables -->
		<script src="{{ URL::asset('assets/js/datatables.js') }}"></script>

		<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
		<script>
			CKEDITOR.replace( 'article-ckeditor' );
		</script>

	</body>
</html>