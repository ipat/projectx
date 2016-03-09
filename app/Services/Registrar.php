<?php namespace App\Services;

use DB;
use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'username' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		DB::table('gendata')->insert([
				'student_id' => $data['student_id'],
				'name' => $data['name_first'],
				'parent' => null,
				'depth' => 0,
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' =>date("Y-m-d H:i:s")
		]);
		return User::create([
			'username' => $data['username'],
			'email' => $data['email'],
			'name_first' => $data['name_first'],
			'name_last' => $data['name_last'],
			'faculty' => $data['faculty'],
			'major' => $data['major'],
			'student_id' => $data['student_id'],
			'password' => bcrypt($data['password']),
		]);
	}

}
