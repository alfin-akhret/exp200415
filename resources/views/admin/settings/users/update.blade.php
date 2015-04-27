@extends('admin/dashboard')

@section('content')

	@include('errors.list')

	{!! Form::model($user, ['url' => ['admin/settings/users', $user->id], 'method' => 'PATCH'] ) !!}
			@include('admin.settings.users._partials._form', ['submitButtonText' => 'Update user'])
	{!! Form::close() !!}
@stop