@extends('admin/dashboard')

@section('content')

	@include('errors.list')

	{!! Form::open(['url' => 'admin/settings/accounts']) !!}
			{!! Form::label('username') !!}
			{!! Form::text('username') !!}
			<br>
			{!! Form::label('email') !!}
			{!! Form::text('email') !!}
			<br>
			{!! Form::label('password') !!}
			{!! Form::password('password') !!}
			<br>
			{!! Form::label('Password confirmation') !!}
			{!! Form::password('password_confirmation') !!}
			<br>
			{!! Form::submit('Create new user') !!}
						
	{!! Form::close() !!}
@stop