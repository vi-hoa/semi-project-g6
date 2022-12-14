<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;


class HomeController extends Controller
{
    //
    public function home() {
        $slide = Slider::all();
        return view('user.index' , compact('slide'));
    }
   
    public function game_single() {
        return view('user.game-single');
    }
    public function games() {
        return view('user.games');
    }
    public function review() {
        return view('user.review');
    }
    public function blog() {
        return view('user.blog');
    }
    public function contact() {
        return view('user.contact');
    }
    
}

   

