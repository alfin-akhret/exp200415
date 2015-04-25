<?php namespace JunkApp\Http\Controllers\Admin\Settings;

use JunkApp\User;
use JunkApp\Usergroup;
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
		$usergroups = Usergroup::all()->lists('name', 'id'); // biar bisa di jadiin drop down di view.. urutannya (text, value);
		return view('admin.settings.accounts.create', compact('usergroups'));
	}

	// store a new account
	public function store(AccountRequest $request) {
		User::create($request->all());
		return redirect('admin/settings/accounts');
	}

	// display edit form
	public function edit($id) {
		$user = User::findOrFail($id);
		$usergroups = Usergroup::all()->lists('name', 'id'); // biar bisa di jadiin drop down di view.. urutannya (text, value);
		return view('admin.settings.accounts.update', compact('user', 'usergroups'));
	}

	// update account
	public function update($id, AccountRequest $request) {
		$user = User::findOrFail($id);
		$user->update($request->all());

		return redirect('admin/settings/accounts');
	}

	// delete confirmation
	public function confirmDelete($id) {
		$this->destroy($id); // temporary ... dangerous
		return redirect('admin/settings/accounts');
	}

	// delete account
	public function destroy($id) {
		$user = User::findOrFail($id);
		$user->delete();
	}
}
