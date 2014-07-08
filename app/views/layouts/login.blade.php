@extends('layouts.master')

@section('content')

	{{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-signin')) }}
	<h2>Log In</h2>
	<input name="email" type="text">
	<input name="password" type="password" class="form-control">
	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
@stop