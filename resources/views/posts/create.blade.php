@extends('layouts.master')

@section('content')

	<form action="/posts" method="POST">

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

		<label class="label" for="body">Body</label>
		<p class="control">
			<textarea class="textarea {{ $errors->has('title') ? 'is-danger' : '' }}" name="body" id="body"></textarea>

			@if($errors->has('body'))

			  	<span class="help is-danger">There are errors in this field</span>

			@endif
		</p>

		<p class="control">
			<button type="submit" class="button is-primary">Publish</button>
		</p>

	</form>

	@include('partials.errors')

@endsection