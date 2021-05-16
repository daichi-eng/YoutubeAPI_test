<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('head')
</head>


<body>
	{{-- ====== Start Header-navigation ================ --}}
	@include('header-nav')
	

	{{-- ===== Start main ============================== --}}
	@yield('content')
			

	{{-- ===== Start footer ============================== --}}
	@include('footer')
	
	
</body>
</html>