<?php namespace JunkApp\Http\Requests;

use JunkApp\Http\Requests\Request;

class AccountRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		$create =  [
			'username' => 'required|alpha_num|min:6',
			'email' => 'required|unique:users|email',
			'password' => 'required|alpha_num|min:3|confirmed',
		];

		$update = $create;
		$update['email'] = 'required|email';

		if(Request::isMethod('PATCH')) {
			return $update;
		}

		return $create;
	}

}
