@extends('admin/dashboard')

@section('content')

	@include('errors.list')

	{!! Form::open(['url' => 'admin/settings/accounts']) !!}
			@include('admin.settings.accounts._partials._form', ['submitButtonText' => 'Create new user'])
	{!! Form::close() !!}

@stop