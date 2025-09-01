<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        return view('frontend.blog');
    }
}
