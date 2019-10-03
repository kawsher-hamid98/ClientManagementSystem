<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Redirect;
use App\User;
use Auth;
use Hash;

class RegisterController extends Controller
{
      public function store(Request $request) {

    	$validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|max:12',
            'cpassword' => 'required|same:password'
        ]);

    	if ($validator -> fails()) {
    		return Redirect::to('register')->withErrors($validator);
    	} 
        else {
    		$name = $request -> input('name');
            $email = $request -> input('email');
            $password = $request -> input('password');

            $users = new User;

            $users -> name = $name;
            $users -> email = $email;
            $users -> password = Hash::make($password);

            $users -> save();
    		return Redirect::to('register') -> with('success', 'Successfully registered');
    	}

    }


    public function login(Request $request) {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

    	if($validator -> fails()) {
    		return Redirect::to('login')->withErrors($validator);
    	} else {

           // $credentials = [
           //      'email' => $request -> email,
           //      'password' => $request -> password
           //  ];

            // dd($credentials);
            $credentials = $request->only('email', 'password');

            if(Auth::attempt($credentials)) {
                return redirect()->intended('/city');
            }
            else {
                return redirect() -> back() -> with('error', 'Email and Password is incorrect');
            }
        }
    }

}
