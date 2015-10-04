@extends('layouts.master')
@section('content')

	<h1> {{ $post->title }} </h1>
	<p class="text-muted">{{$post->content}}</p>

@stop
