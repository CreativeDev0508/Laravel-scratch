<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<script src="https://use.fontawesome.com/3e7a62b64e.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
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
	<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
	<script>
		var simplemde = new SimpleMDE({ element: document.getElementById("body") });
	</script>
</body>
</html>