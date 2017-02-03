<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link rel="stylesheet" href="css/app.css">
</head>
<body>
	@include('partials.header')

	@yield('content')

	@include('partials.footer')
</body>
</html>