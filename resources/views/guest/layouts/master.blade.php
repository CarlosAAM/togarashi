<!DOCTYPE html>
<html lang="es">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('assets/pato/images/icons/favicon.png') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/pato/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/pato/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/pato/fonts/themify/themify-icons.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/pato/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/pato/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/pato/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/pato/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/pato/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/pato/vendor/slick/slick.css') }}">
<!--===============================================================================================-->
<!-- Pnotify styles -->
	<link href="{{ asset('assets/admin/pnotify/pnotify.custom.min.css') }}" rel="stylesheet" />

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/pato/vendor/lightbox2/css/lightbox.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/pato/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/pato/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	@include('guest.layouts.header')

	<!-- Sidebar -->
	@include('guest.layouts.sidebar')

	@yield('content')

	<!-- Footer -->
	@include('guest.layouts.footer')

	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

	@include('guest.layouts.scripts')

	@include('admin.layouts.errors')
    @include('admin.layouts.success')

</body>
</html>
