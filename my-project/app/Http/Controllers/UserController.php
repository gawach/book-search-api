<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
	# サインアップ
	public function signup(Request $request)
	{
#		$user = new User();
#		$user->email = $request->input('email');
#		$user->password = $request->input('password');
#		$user->save();
#		return response()->json(User::all());
		$token = parent::createJWT();
		#return 'Hello, World!';
		return $token;
#		return response()->;

	}

#	# ログイン
#	public function login(Request $request)
#	{
#		$user = new User();
#		$user->email = $request->input('email');
#		$user->email_verify = $request->input('email_verify');
#		$user->password = $request->input('password');
#	}

}
