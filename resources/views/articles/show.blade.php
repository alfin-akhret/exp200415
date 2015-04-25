@extends('app')

@section('content')
	<h1>{{ $article->title }}</h1>
			<span>Published_at: {{ $article->published_at }}</span>
			<div>
				{{ $article->body }}
			</div>

@stop

