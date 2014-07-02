@extends('layouts.master')

@section('content')

<div class="container">

	@if (isset($post))
		<h2>Edit Post</h2>
		{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
	@else
		<h2>Create New Post</h2>
		{{ Form::open(array('action'=>'PostsController@store')) }}
	@endif

		{{ $errors->first('title', '<span class="help-block">:message</span>') }}<br>
		{{ $errors->first('body', '<span class="help-block">:message</span>') }}<br>

		{{ Form::label('title', 'Title') }}<br>
		{{ Form::text('title') }}
		<br>
		{{ Form::label('body', 'Body') }}<br>
		{{ Form::textarea('body') }}
		<br>
		<input type="submit">

	{{ Form::close() }}
</div>

@stop