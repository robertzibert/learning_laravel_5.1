@extends('layouts.master')
@section('content')
	<h1>Edit Post: {{$post->title}}</h1>
	<hr>
	{!! Form::model($post, ['method' => 'PATCH' , 'route' => ['posts.update', $post->id] ]) !!}
		@include('layouts.forms._post')
	{!! Form::close() !!}
@stop
