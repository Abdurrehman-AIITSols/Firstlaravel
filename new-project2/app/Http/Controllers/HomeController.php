<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Contact(){
        return view('contactus');
    }
    public function About(){
        return view('About');
    }
}
