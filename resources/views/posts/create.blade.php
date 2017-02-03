@extends('layouts.master')

@section('content')

	<form action="/posts" method="POST">

		{{ csrf_field() }}

		<label class="label" for="title">Title</label>
		<p class="control">
		  <input class="input" type="text" id="title" name="title">
		</p>

		<label class="label" for="body">Body</label>
		<p class="control">
			<textarea class="textarea" name="body" id="body"></textarea>
		</p>

		<p class="control">
			<button type="submit" class="button is-primary">Publish</button>
		</p>

</form>

@endsection