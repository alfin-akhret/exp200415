@extends('admin.dashboard')

@section('content')
	{!! Form::open(['url' => 'admin/settings/usergroups']) !!}
		{!! Form::label('Name', 'name') !!}
		{!! Form::text('name') !!}

		<br>
		{!! Form::submit('Create new usergroups') !!}

	{!! Form::close() !!}
@stop