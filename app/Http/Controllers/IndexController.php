<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){
        return view('home',['name' => 'boy']);
    }
    public function show(){
        return view('welcome');
    }
}
