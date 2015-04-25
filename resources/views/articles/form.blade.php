<!-- temporary --> 
{!! Form::hidden('user_id', '1') !!}

{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title') !!}
		<br>
		{!! Form::label('body', 'Body:') !!}
		{!! Form::textarea('body') !!}
		<br>
		{!! Form::label('published_at', 'Published on:') !!}
		{!! Form::input('date', 'published_at', date('Y-m-d')) !!}
		<br>
		{!! Form::submit($submitButtonText) !!}
