@extends('layouts.master')

@section('content')

	<h1 class="title is-1">{{ $post->title }}</h1>

	<p class="subtitle">{{ $post->created_at->diffForHumans() }}</p>

	<div class="content">

		{!! Markdown::parse($post->body) !!}
		
	</div>

	<div class="box is-shadowless has-no-h-padding">

		<h2 class="title">Comments</h2>
		
		@foreach($post->comments as $comment)

			<div class="content">
				
				<p><strong>Posted by: Person </strong><small>{{ $comment->created_at->diffForHumans() }}</small></p>
				<p>{{ $comment->body }}</p>

			</div>

		@endforeach

	</div>

@endsection