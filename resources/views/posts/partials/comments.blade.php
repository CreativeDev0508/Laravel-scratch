<div class="box is-shadowless has-no-h-padding" id="comments">

	<h2 class="title">Comments</h2>
	
	@foreach($post->comments as $comment)

		<div class="content">
			
			<p><strong>Posted by: Person </strong><small>{{ $comment->created_at->diffForHumans() }}</small></p>

			<p>{{ $comment->body }}</p>

		</div>

	@endforeach

	<form action="/posts/{{ $post->id }}/create" method="POST">
		
		{{ csrf_field() }}

		<label class="label">Comment</label>
		<p class="control">
			<textarea class="textarea {{ $errors->has('body') ? 'is-danger' : '' }}" name="body"></textarea>

			@if($errors->has('body'))

			  	<span class="help is-danger">There are errors in this field</span>

			@endif
		</p>

		<p class="control">
			<button type="submit" class="button is-primary">Add comment</button>
		</p>

	</form>

	@include('partials.errors')

</div>