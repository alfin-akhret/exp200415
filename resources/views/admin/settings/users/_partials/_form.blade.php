{!! Form::label('username') !!}
{!! Form::text('username') !!}
<br>
{!! Form::label('email') !!}
{!! Form::text('email') !!}
<br>
{!! Form::label('usergroup_id', 'usergroup') !!}
{!! Form::select('usergroup_id', $usergroups) !!}
<br>
{!! Form::label('password') !!}
{!! Form::password('password') !!}
<br>
{!! Form::label('Password confirmation') !!}
{!! Form::password('password_confirmation') !!}
<br>
{!! Form::submit($submitButtonText) !!}