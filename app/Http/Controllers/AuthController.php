<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use Redirect;

class AuthController extends Controller
{
    public function getCuratorLogin()
    {
        return view('auth/login');
    }

    public function postCuratorLogin(Request $http)
    {
        if(Auth::attempt(['username' => $http->username, 'password' => $http->password]))
            return redirect::intended('/');
        else
            return redirect::to('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect::to('/');
    }
}
