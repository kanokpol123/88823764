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
    public function submit(Request $req)
    {
        $fname = $req->input('fname');
        $lname = $req->input('lname');
        $data = [ 'fname' => $fname, 'lname' => $lname ];
        return view('welcome', $data);
        // echo "fname : ".$fname."<br>";
        // echo "lname : ".$lname."<br>";
    }
}
