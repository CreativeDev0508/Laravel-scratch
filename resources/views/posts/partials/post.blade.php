<h1 class="title is-one">
	<a href="/posts/{{ $post->id }}">
		{{ $post->title }}
	</a>
</h1>

<p class="subtitle">
	By <a href="/author/{{ $post->user->id }}">{{ $post->user->name }}</a> |  
	{{ $post->created_at->diffForHumans() }}</p>

<div class="content">

	{!! Markdown::parse($post->body) !!}
	
</div>