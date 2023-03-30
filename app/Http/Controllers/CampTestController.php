<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampTestController extends Controller
{
    //
    public function home(){
        return view('home_page');
    }
    public function form_list(){
        return view('form_list');
    }
    public function about_me(){
        return view('about_me');
    }
}
