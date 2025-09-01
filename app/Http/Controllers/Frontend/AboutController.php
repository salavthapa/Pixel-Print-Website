<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about (){
        return view('frontend.about');
    }
}
