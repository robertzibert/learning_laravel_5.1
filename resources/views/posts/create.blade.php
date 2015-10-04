@extends('layouts.master')
@section('content')
	<h1>Write a New Post</h1>
	<hr>
	{!! Form::open(['url' => 'posts']) !!}
		<div class="form-group">
			{!! Form::label('title') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('content') !!}
			{!! Form::textarea('content', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Add New Post', ['class' => 'btn btn-primary form-control']) !!}
		</div>
		{!! Form::close() !!}
@stop
