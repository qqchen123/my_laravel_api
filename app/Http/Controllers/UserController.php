<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function register(Request $request)
	{
		$input = $request->all();
		$input['password'] = bcrypt($input['password']);
		$user = User::create($input);
		dd($user);die;
    }
}
