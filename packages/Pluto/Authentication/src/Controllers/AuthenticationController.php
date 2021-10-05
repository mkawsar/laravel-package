<?php

namespace Pluto\Authentication\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login()
    {
        if (!Auth::check()) {
            return view('authentication.login');
        } else {
            return redirect()->to('app.home');
        }
    }
}
