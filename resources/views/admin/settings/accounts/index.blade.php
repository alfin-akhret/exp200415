@extends('admin/dashboard')

@section('content')
	<a href="{{ url('admin/settings/accounts/create') }}">Create new user</a> <br>
	<ul>
		@foreach($users as $user)
			<li>{{ $user->id }} {{ $user->username }} <a href="{{ URL::route('admin.settings.accounts.edit', $user->id) }}">Edit</a> <a href="{{ URL::route('admin.settings.accounts.delete', $user->id) }}">Delete</a></li>
		@endforeach
	</ul>
@stop