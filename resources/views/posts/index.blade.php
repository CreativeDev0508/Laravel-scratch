@extends('layouts.master')

@section('content')

	@foreach($posts as $post)

		<div class="box is-shadowless has-no-h-padding">

			@include('posts.partials.post')

		</div>

	@endforeach

	<nav class="pagination is-right">
		<a href="#" class="pagination-previous">Older</a>
		<a href="#" class="pagination-next is-disabled">Newer</a>
	</nav>

@endsection