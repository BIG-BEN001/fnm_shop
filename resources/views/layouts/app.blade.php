<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @php $gtext = gtext(); @endphp
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title') | {{ $gtext['site_title'] }}</title>
	<!-- favicon -->
<<<<<<< HEAD
	<link rel="shortcut icon" href="{{ $gtext['favicon'] ? asset('media/'.$gtext['favicon']) : asset('backend/images/favicon.ico') }}" type="image/x-icon">
	<link rel="icon" href="{{ $gtext['favicon'] ? asset('media/'.$gtext['favicon']) : asset('backend/images/favicon.ico') }}" type="image/x-icon">
=======
	<link rel="shortcut icon" href="{{ $gtext['favicon'] ? asset('public/media/'.$gtext['favicon']) : asset('public/backend/images/favicon.ico') }}" type="image/x-icon">
	<link rel="icon" href="{{ $gtext['favicon'] ? asset('public/media/'.$gtext['favicon']) : asset('public/backend/images/favicon.ico') }}" type="image/x-icon">
>>>>>>> da708e9 (updated on ipay)
    <!-- CSS -->
	<style type="text/css">
	:root {
	  --backend-theme-color: {{ $gtext['backend_theme_color'] }};
	}
	</style>
<<<<<<< HEAD
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/font-awesome.min.css')}}">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('backend/css/responsive.css')}}">
	<link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
=======
    <link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/css/font-awesome.min.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/backend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/css/responsive.css')}}">
>>>>>>> da708e9 (updated on ipay)
	@stack('style')
  </head>
  <body>
	@yield('content')
    <!-- JS -->
<<<<<<< HEAD
	<script src="{{asset('backend/js/jquery-3.6.0.min.js')}}"></script>
	<script src="{{asset('backend/js/popper.min.js')}}"></script>
	<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
=======
	<script src="{{asset('public/backend/js/jquery-3.6.0.min.js')}}"></script>
	<script src="{{asset('public/backend/js/popper.min.js')}}"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="{{asset('public/backend/js/bootstrap.min.js')}}"></script>
>>>>>>> da708e9 (updated on ipay)
	@stack('scripts')
  </body>
</html>