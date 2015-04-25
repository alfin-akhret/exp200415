<?php namespace JunkApp;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model {

	protected $fillable = [
		'title',
		'body',
		'published_at',
		'user_id',
	];

	protected $dates = ['published_at']; // use this to carbonize non-carbon date property

	// mutator... format the data before insert it to the DB
	public function setPublishedAtAttribute($date) {
		$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
	}

	//scope
	public function scopePublished($query) {
		$query->where('published_at', '<=', Carbon::now());
	}

	public function scopeUnpublished($query) {
		$query->where('published_at', '>=', Carbon::now());
	}

	// relationship
	// article belong to user
	public function user() {
		return $this->belongsTo('JunkApp\User');
	}


}
