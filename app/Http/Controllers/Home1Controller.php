<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home1Controller extends Controller
{
    //
    public function index(){
        return view('home');
    }

    public function index1(){
        return view('home.members_home');
    }
}
