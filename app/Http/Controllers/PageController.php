<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage(){
        return view('home');
    }

    public function eventsPage(){
        return view('events');
    }

    public function profilePage(){
        return view('profile');
    }

}

