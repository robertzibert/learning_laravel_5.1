@extends('layouts.master')
@section('content')
	<ul class="list-group">
		@for($i=1; $i <10 ; $i++)
			<li class="list-group-item"> {{$i}} Post</li>
		@endfor
	</ul>
@stop
