<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function clients(){
        return view('frontend.clients');
    }
}
