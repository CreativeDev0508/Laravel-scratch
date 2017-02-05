<h1 class="title is-one">
	<a href="/posts/{{ $post->id }}">
		{{ $post->title }}
	</a>
</h1>

<p class="subtitle">
	By {{ $post->user->name }} |  
	{{ $post->created_at->diffForHumans() }}</p>

<div class="content">

	{!! Markdown::parse($post->body) !!}
	
</div>