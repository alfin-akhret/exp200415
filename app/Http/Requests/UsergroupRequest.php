<?php namespace JunkApp\Http\Requests;

use JunkApp\Http\Requests\Request;

class UsergroupRequest extends Request {

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
		return [
			'name' => 'required|unique:usergroups|alpha_num'
		];
	}

}
