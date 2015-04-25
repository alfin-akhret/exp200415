<?php namespace JunkApp;

use Illuminate\Database\Eloquent\Model;

class Usergroup extends Model {

	protected $table = 'usergroups';

	protected $fillable = [
		'name'
	];

}
