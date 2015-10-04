<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>LaraBlogs</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
	<body>
		<header>
			@if(Auth::check())
				@include('layouts.partials.nav-bar')
			@endif
		</header>

		<div class="container">
			@yield('content')
		</div>

		<footer>
			@include('layouts.partials.footer')
		</footer>

	</body>
</html>
