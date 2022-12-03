<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Models\User;
use DB;
class RegisterController extends Controller
{
    public function getRegister(){
        return view ('auth.register');
    }
    public function postRegister(Request $request){
        $user = user::create($request->validated());
        $user = new User();
        $user -> username = $request ->username;
        $user -> email = $request ->email;
        $user -> password = $request ->password;
        $user -> save();
        return redirect('/')->with('Sign up account successfully');
    }
}
