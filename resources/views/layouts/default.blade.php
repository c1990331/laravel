<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>@yield('title','Sample')</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	@include('layouts._header')
    <div class="container">
		@yield('content')
	</div>
	@include('layouts._footer')
</body>
</html>