@extends('layouts.master')
@section('content')
	<h1>Write a New Post</h1>
	<hr>
	{!! Form::open(['method' => 'POST' , 'route' => 'posts.store']) !!}
		@include('layouts.forms._post',['submitButtonText' => 'Add New Post'])
	{!! Form::close() !!}

	@include('errors.list')
@stop
