<form method="POST" action="{{ route('oldurl') }}">
	age: <input type="text" name="age">
	<input type="hidden" name="_token" value="{{csrf_token()}}" >

	<input type="submit" value="go!" name="submit">
	
</form>