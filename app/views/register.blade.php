@extends('layouts.master')

@section('content')

	<style>

		.registerForm {
			padding-bottom: 270px;
		}

	</style>

	<h1>Registration Form</h1>
	
	{{ Form::open(array('action'=>'HomeController@showRegistration')) }}
		<div class="registerForm">
			<div class="form-group">
				<label for="inputUserName3" class="col-sm-2 control-label">Username</label>
				<div class="col-sm-10">
					<input type="username" class="form-control" id="inputUserName3" placeholder="Username">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
				</div>
			</div>

			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<label for="authInputPassword3" class="col-sm-2 control-label">Retype Password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="authInputPassword3" placeholder="Retype Password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<div class="checkbox">
						<label>
			  				<input type="checkbox"> Remember me
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default btn-info">Sign Up!</button>
				</div>
			</div>
		</div>
	{{ Form::close() }}


@stop