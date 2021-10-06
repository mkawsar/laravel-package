<?php

namespace Pluto\Authentication\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    public function login()
    {
        if (!Auth::check()) {
            return view('pluto.authentication.login');
        } else {
            return redirect()->to('app.home');
        }
    }


    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']], true)) {
            return redirect()->route('app.home');
        }
        return redirect()->back()->with('error_message', 'We are unable to sign you in. Invalid Email and password.');
    }

    public function register()
    {
        return view('pluto.authentication.register');
    }
}
