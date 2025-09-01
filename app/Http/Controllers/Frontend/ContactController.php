<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('frontend.contact');
    }
}
