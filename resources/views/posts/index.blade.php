@extends('layouts.master')

@section('content')

	@foreach($posts as $post)

		<div class="box is-shadowless has-no-h-padding">

			@include('posts.partials.post')

		</div>

	@endforeach

	{{ $posts->links() }}

@endsection