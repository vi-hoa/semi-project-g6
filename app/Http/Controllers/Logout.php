<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Logout extends Controller
{
    public function Logout()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    }
}
