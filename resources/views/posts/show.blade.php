@extends('layouts.master')
@section('content')

	<h1> {{ $post->title }} </h1>
	<p class="text-muted">{{$post->content}}</p>
	<h5>Tags:</h5>
	<ul>
		@forelse($post->tags as $tag)
			<li>{{$tag->name}}</li>
		@empty
			<li>No Tags</li>
		@endforelse
	</ul>
@stop
