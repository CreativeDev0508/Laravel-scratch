@extends('layouts.master')

@section('content')

	<h1 class="title is-1">Sign in</h1>

	<form action="/login" method="POST">

		{{ csrf_field() }}

		<label class="label" for="email">E-mail</label>
		<p class="control {{ $errors->has('email') ? 'has-icon has-icon-right' : '' }}">
		  <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="email" id="email" name="email" value="{{ old('email') }}">

		  @if($errors->has('email'))
			<span class="icon is-small">
			    <i class="fa fa-warning"></i>
			</span>

		 	<span class="help is-danger">There are errors in this field</span>

		  @endif
		</p>

		<label class="label" for="password">Password</label>
		<p class="control {{ $errors->has('password') ? 'has-icon has-icon-right' : '' }}">
		  <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" type="password" id="password" name="password">

		  @if($errors->has('password'))
			<span class="icon is-small">
			    <i class="fa fa-warning"></i>
			</span>

		 	<span class="help is-danger">There are errors in this field</span>

		  @endif
		</p>

		<p class="control">
			<button type="submit" class="button is-primary">Login</button>
		</p>

	</form>

	@include('partials.errors')
	
@endsection