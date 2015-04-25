@extends('app')

@section('content')
	<h1>Articles</h1>
	@if (count($articles))
		@foreach ($articles as $article)
			<h2>
				<a href="{{ url('/articles', $article->id) }}"> {{ $article->title }} </a>
			</h2>
			<span>Published_at: {{ $article->published_at->diffForHumans() }}</span>
			<div>
				{{ $article->body }}
			</div>
		@endforeach
	@else
		<p>Theres no article yet!</p>
	@endif

@stop

