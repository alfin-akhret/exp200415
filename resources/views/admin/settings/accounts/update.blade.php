@extends('admin/dashboard')

@section('content')

	@include('errors.list')

	{!! Form::model($user, ['url' => ['admin/settings/accounts', $user->id], 'method' => 'PATCH'] ) !!}
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
			{!! Form::submit('Update user') !!}
						
	{!! Form::close() !!}
@stop