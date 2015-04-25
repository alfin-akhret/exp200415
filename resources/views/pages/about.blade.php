@extends('app')

@section('content')
<h1>About!</h1>

@if (count($people))
<h2>Good people</h2>
<ul>
	@foreach ($people as $person)
		<li>{{ $person }}</li>
	@endforeach
</ul>

@endif


<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit facere, ipsum? Eaque dolorem facere eligendi harum perspiciatis numquam iusto odit temporibus delectus quos, libero, exercitationem cumque, inventore nobis iste tempore.</p>
@stop

