<?php namespace JunkApp\Http\Controllers\Admin\Settings;

use JunkApp\Usergroup;
use JunkApp\Http\Requests\UsergroupRequest;
use JunkApp\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UsergroupController extends Controller {

	// form: create usergroups
	public function create() {
		return view('admin.settings.usergroups.create');
	}

	// insert new usergroups
	public function store(UsergroupRequest $request) {
		Usergroup::create($request->all());
		return redirect('admin/settings/accounts');
	}

}
