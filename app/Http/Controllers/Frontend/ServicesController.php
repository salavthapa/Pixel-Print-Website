<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
      public function services (){
        return view('frontend.services');
    }
}
