<?php namespace JunkApp\Http\Controllers\Admin\Settings;

use JunkApp\User;
use JunkApp\Usergroup;
use JunkApp\Http\Requests\UserRequest;
use JunkApp\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller {

	// list all user account
	public function index() {
		$users = User::all();
		return view('admin.settings.users.index', compact('users'));
	}

	// display 'create new user form'
	public function create() {
		$usergroups = Usergroup::all()->lists('name', 'id'); // biar bisa di jadiin drop down di view.. urutannya (text, value);
		return view('admin.settings.users.create', compact('usergroups'));
	}

	// store a new account
	public function store(UserRequest $request) {
		User::create($request->all());
		return redirect('admin/settings/users');
	}

	// display edit form
	public function edit($id) {
		$user = User::findOrFail($id);
		$usergroups = Usergroup::all()->lists('name', 'id'); // biar bisa di jadiin drop down di view.. urutannya (text, value);
		return view('admin.settings.users.update', compact('user', 'usergroups'));
	}

	// update account
	public function update($id, UserRequest $request) {
		$user = User::findOrFail($id);
		$user->update($request->all());

		return redirect('admin/settings/users');
	}

	// delete confirmation
	public function confirmDelete($id) {
		$this->destroy($id); // temporary ... dangerous
		return redirect('admin/settings/users');
	}

	// delete account
	public function destroy($id) {
		$user = User::findOrFail($id);
		$user->delete();
	}
}
