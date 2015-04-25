@extends('app')

@section('content')
	<h1>Write new article</h1>
	
	{!! Form::open(['url' => 'articles']) !!}
		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title') !!}
		<br>
		{!! Form::label('body', 'Body:') !!}
		{!! Form::textarea('body') !!}
		<br>
		{!! Form::label('published_at', 'Published on:') !!}
		{!! Form::input('date', 'published_at', date('Y-m-d')) !!}
		<br>
		{!! Form::submit('Add article') !!}

	{!! Form::close() !!}

	<!-- validation errors -->
	@if ($errors->any())
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

@stop