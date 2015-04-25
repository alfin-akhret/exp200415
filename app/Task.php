<?php namespace JunkApp;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

	//
	protected $fillable = [
		'title',
		'desc',
		'due_date',
	];

}
