@extends('layouts.master')

@section('content')
	
	<div id="showPost">
		<h1>{{{ $post->title }}}</h1>
		<h5>{{{ $post->created_at->now()->subMinutes(2)->diffForHumans() }}}</h5>
		<p>{{ $post->renderBody() }}</p>

		@if ($post->img_path)
			<img src="{{{ $post->img_path }}}" class="img-responsive">
		@endif 

		{{ link_to_action('PostsController@edit', 'Edit', array($post->id)) }} <br>
		{{ link_to_action('PostsController@index', 'Go to Index') }}

		{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
			{{ Form::submit('Delete') }}
		{{ Form::close() }}
	</div>

@stop