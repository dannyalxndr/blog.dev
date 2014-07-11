@extends('layouts.master')

@section('content')

	<div class="sep portfolio" data-stellar-background-ratio="0.5"></div>
	<div id="blogIndex">
		<div class="row col-xs-12 sep " id="text-header">
				<h1 id="indexHeader">Blog Entries<sup></sup></h1>
		</div>
			<div id="indexPosts" class="col-md-8">
				@foreach ($posts as $post)
				<h2>{{ link_to_action ('PostsController@show', $post->title, array($post->id)) }}</h5>
				<h5>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</td>
				 	<br>
				 	<div class="blogPost">
						<p>{{ substr($post->body, 0, 100) }}</p>
					</div>
					<hr />
				 	@if (Auth::check())
				 		<td>{{ link_to_action('PostsController@edit', 'Edit', array($post->id), array('class' => 'btn btn-default btn-sm')) }}</td>
				 	@endif
			    @endforeach
			</div>
		<div id="paginationLinks">
			{{ $posts->links() }}
		</div>
	</div>
	
	

@stop