@extends('admin/dashboard')

@section('content')
	<a href="{{ url('admin/settings/accounts/create') }}">Create new user</a>
	<ul>
		@foreach($users as $user)
			<li>{{ $user->id }} {{ $user->username }}</li>
		@endforeach
	</ul>
@stop