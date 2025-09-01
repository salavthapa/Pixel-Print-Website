<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function teams(){
        return view('frontend.teams');
    }
}
