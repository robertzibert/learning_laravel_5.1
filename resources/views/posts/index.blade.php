@extends('layouts.master')
@section('content')
	<h1>Posts List</h1>
	<hr>
	@foreach($posts as $post)
		<h2>
			<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
		</h2>
		<p class="text-muted">{{$post->content}}</p>
	@endforeach

@stop
