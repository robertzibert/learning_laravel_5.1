@extends('layouts.master')
@section('content')

<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">

	<div class="panel panel-default" >

		<div class="panel-heading">
        <div class="panel-title text-center">LaraBlogs</div>
    </div>

    <div class="panel-body" >

      <form class="form-horizontal" action="/auth/login" method="POST">

			<input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email@example.com">
      </div>

      <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input id="password" type="password" class="form-control" name="password" placeholder="Password">
      </div>

      <div class="form-group">
          <!-- Button -->
          <div class="col-sm-12 controls">
              <button type="submit" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> Log in</button>
          </div>
      </div>

      </form>

    </div>
	</div>
	@include('errors.list')
</div>

@stop
