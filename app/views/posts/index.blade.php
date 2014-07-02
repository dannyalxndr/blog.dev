@extends('layouts.master')

@section('content')

	<table class="table table-hover">
		<tr>
		 	<th>All the Posts</th>
		 	<th>Time created</th>
		</tr>
		
		 @foreach ($posts as $post)
		 <tr>
		 	<td>{{ link_to_action ('PostsController@show', $post->title, array($post->id)) }}</td>
		 	<td>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</td>
		 	<td>{{ link_to_action('PostsController@edit', 'Edit', array($post->id), array('class' => 'btn btn-default btn-sm')) }}</td>
		 </tr>
		 @endforeach
		
	</table>
	{{ $posts->links() }}
	 <hr>
	{{ link_to_action('PostsController@create', 'NewPost') }}

@stop