@extends('layouts.master')

@section('content')
	
	<div id="showPost">
		<h1>{{{ $post->title }}}</h1>
		<h5>{{{ $post->created_at->now()->subMinutes(2)->diffForHumans() }}}</h5>
		<p>{{ $post->renderBody() }}</p>

		@if ($post->img_path)
			<img src="{{{ $post->img_path }}}" class="img-responsive">
		@endif 
		@if (Auth::check())
			{{ link_to_action('PostsController@edit', 'Edit', array($post->id)) }} <br>
			{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'id' => 'deleteForm', 'method' => 'DELETE')) }}
				{{ Form::submit('Delete') }}
			{{ Form::close() }}
		@endif
		{{ link_to_action('PostsController@index', 'Go to Index') }}

	</div>

@stop

@section('bottomscript')

	<script>

		$('.deletePost').click(function(){
			var postId = $(this).data('postid');
			$('#deleteForm').attr('action', '/posts/' + postId);
			if(confirm("Are you sure you want to delete post")) {
				$('#deleteForm').submit();
			}
		});

	</script>
@stop