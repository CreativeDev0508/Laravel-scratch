@extends('layouts.master')

@section('content')

	<h1 class="title is-1">Register</h1>

	<form action="register" method="POST">
		
		{{ csrf_field() }}

		<label class="label" for="name">Name</label>
		<p class="control {{ $errors->has('name') ? 'has-icon has-icon-right' : '' }}">
		  <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" type="text" id="name" name="name" value="{{ old('name') }}">

		  @if($errors->has('name'))
			<span class="icon is-small">
			    <i class="fa fa-warning"></i>
			</span>

		 	<span class="help is-danger">There are errors in this field</span>

		  @endif
		</p>

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

		<label class="label" for="password_confirmation">Confirm password</label>
		<p class="control {{ $errors->has('password') ? 'has-icon has-icon-right' : '' }}">
		  <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" type="password" id="password_confirmation" name="password_confirmation">

		  @if($errors->has('password'))
			<span class="icon is-small">
			    <i class="fa fa-warning"></i>
			</span>

		 	<span class="help is-danger">There are errors in this field</span>

		  @endif
		</p>

		<p class="control">
			<button type="submit" class="button is-primary">Register</button>
		</p>

	</form>

	@include('partials.errors')

@endsection