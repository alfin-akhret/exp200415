<?php namespace JunkApp\Http\Controllers\Admin\Settings;

use JunkApp\User;
use JunkApp\Http\Requests\AccountRequest;
use JunkApp\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AccountController extends Controller {

	// list all user account
	public function index() {
		$users = User::all();
		return view('admin.settings.accounts.index', compact('users'));
	}

	// display 'create new user form'
	public function create() {
		return view('admin.settings.accounts.create');
	}

	// store a new account
	public function store(AccountRequest $request) {
		User::create($request->all());
		return redirect('admin/settings/accounts');
	}
}
