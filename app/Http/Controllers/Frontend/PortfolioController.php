<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio(){
        return view('frontend.portfolio');
    }
}
