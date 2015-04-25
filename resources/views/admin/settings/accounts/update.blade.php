@extends('admin/dashboard')

@section('content')

	@include('errors.list')

	{!! Form::model($user, ['url' => ['admin/settings/accounts', $user->id], 'method' => 'PATCH'] ) !!}
			@include('admin.settings.accounts._partials._form', ['submitButtonText' => 'Update user'])
	{!! Form::close() !!}
@stop