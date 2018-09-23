<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title','Laravel练习')</title>
		<link rel="stylesheet" href="/css/app.css" type="text/css">
	</head>
	<body>
		@include('layouts._header')

		<div class="container">
			<div class="col-md-offset-1 col-md-10">
				@yield('content')
				@include('layouts._footer')
			</div>
		</div>
		
	</body>
</html>