<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function getLogin()
    {
        return view('product.login');
    }
    public function postLogin(Request $request)
    {
        $credentials = ['username' =>$request->get('username'), 'password' =>$request->get('password')];
        if(!Auth::validate($credentials)){
            return redirect()->route('ListUser')->with('Logged in Successfully');
        } else{
            return redirect()->route('login')->with('Failed to login');
        }
    }
    public function getLogout(){
        Session::flush();
        Auth::logout();
        return redirect()->intended('product.login');
    }
};
