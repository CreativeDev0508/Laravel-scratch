@extends('layouts.master')

@section('content')

	<form action="/posts" method="POST">

		<tabs>
		
			<tab name="About Us" :selected="true">
				{{ csrf_field() }}

				<label class="label" for="title">Title</label>
				<p class="control {{ $errors->has('title') ? 'has-icon has-icon-right' : '' }}">
				  <input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" id="title" name="title">

				  @if($errors->has('title'))
					<span class="icon is-small">
					    <i class="fa fa-warning"></i>
					</span>

				 	<span class="help is-danger">There are errors in this field</span>

				  @endif
				</p>

				<label class="label" for="body">Content</label>
				<p class="control">
					<textarea class="textarea {{ $errors->has('title') ? 'is-danger' : '' }}" name="content" id="body"></textarea>

					@if($errors->has('body'))

					  	<span class="help is-danger">There are errors in this field</span>

					@endif
				</p>

				<p class="control">
					<input class="flatpickr input" type="text" placeholder="Select Date.." name="date">
				</p>

				<p class="control">
					<button type="submit" class="button is-primary">Publish</button>
				</p>				
			</tab>

			<tab name="About Our Culture">
				
			</tab>

			<tab name="About Our Vision">
				
			</tab>

		</tabs>

	</form>

	@include('partials.errors')

@endsection

@section('scripts')

	<script src="/js/simplemde.min.js"></script>
	<script src="/js/flatpickr.min.js"></script>
	<script>
		// SimpleMDE instantiation
		var simplemde = new SimpleMDE({
		    element: document.getElementById("body"),
		    toolbar: [
		    	"bold",
		    	"italic",
		    	"heading",
		    	"|",
		    	"quote",
		    	"unordered-list",
		    	"ordered-list",
		    	"|",
		    	"link",
		    	"image",
		    	"|",
		    	"fullscreen",
		    	"guide"
		    ]
		});

		flatpickr(".flatpickr", {
			enableTime: true,
			altInput: true,
			altFormat: "F j, Y h:i K"
		});
	</script>

@endsection