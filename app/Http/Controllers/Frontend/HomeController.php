<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home (){
        return view('frontend.home');
    }
}
