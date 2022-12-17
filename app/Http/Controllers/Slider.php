<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Slider extends Controller
{
  public function home() {
    $slide = Slider::all();
    return view('user.index' , compact('slide'));
}
}