<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class ServiceDetailsController extends Controller
{
    public function serviceDetails(){
        return view('frontend.serviceDetails');
    }
}
