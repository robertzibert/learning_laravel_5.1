<div class="form-group">
	{!! Form::label('title') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('content') !!}
	{!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('published_at') !!}
	{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('tags_lists', 'Tags:') !!}
	{!! Form::select('tags[]', $tags, null , ['class' => 'form-control', 'multiple']) !!}
</div>


<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
