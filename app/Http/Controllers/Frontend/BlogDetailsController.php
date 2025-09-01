<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
    public function blogDetails(){
        return view('frontend.blogDetails');
    }
}
