<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<script src="https://use.fontawesome.com/3e7a62b64e.js"></script>
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
	<link rel="stylesheet" href="/css/simplemde.min.css">
</head>
<body>
	<section class="hero is-primary is-medium">

		@include('partials.header')

	</section>

	<section class="section">
		<div class="container">
			<div class="columns">
				<div class="column is-three-quarters">

					@yield('content')

				</div>

				<div class="column is-one-quarter">

					@include('partials.sidebar')

				</div>
			</div>
		</div>
	</section>

	<footer class="footer">
  		<div class="container">

			@include('partials.footer')

		</div>
	</footer>
	
	<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>