@extends('layouts.master')
@section('content')
	<h1>Posts List</h1>
	<hr>
	@foreach($posts as $post)
		<h2>
			{!! link_to_route('posts.show', $post->title , [$post->id]) !!}
		</h2>
		<p class="text-muted">{{$post->content}}</p>
	@endforeach

@stop
