<?php namespace JunkApp\Http\Controllers\Frontend;

use JunkApp\Article;
use JunkApp\Http\Requests\CreateArticleRequest;
use JunkApp\Http\Controllers\Controller;
use Carbon\Carbon;

class ArticleController extends Controller {

	public function index() {

		$articles = Article::latest('published_at')->published()->get();

		return view('articles.index', compact('articles'));

	}

	public function show($id){
		$article = Article::findOrFail($id);

		return view('articles.show', compact('article'));
	}

	public function create() {
		return view('articles.create');
	}

	public function store(CreateArticleRequest $request){


		Article::create($request->all());

		return redirect('articles');
	}
}
