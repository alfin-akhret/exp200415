@extends('admin/dashboard')

@section('content')

	@include('errors.list')

	{!! Form::open(['url' => 'admin/settings/users']) !!}
			@include('admin.settings.users._partials._form', ['submitButtonText' => 'Create new user'])
	{!! Form::close() !!}

@stop