<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function submit(Request $req)
    {
        $fname = $req->inputName('name');
        $lname = $req->inputLastname('lastname');
        $email = $req->inputEmail('email');
        $data = [ 'name' => $fname, 'lastname' => $lname, 'email' => $email  ];
        return view('form_list_submit', $data);
        // echo "fname : ".$fname."<br>";
        // echo "lname : ".$lname."<br>";
    }
}
