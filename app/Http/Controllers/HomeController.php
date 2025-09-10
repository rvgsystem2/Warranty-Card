<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function feedback(){
        return  view('frontend.feedback');
    }

    public function complain(){
        return view('frontend.complain');
    }

    public function user_rec(){
        return view('frontend.user-rec');
    }

    public function inqury(){
        return view('frontend.inqury');
    }

    public function varranty(){
        return view('frontend.varranty');
    }
}
