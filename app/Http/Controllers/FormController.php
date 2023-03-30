<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
public function submit(Request $req)
{
    $fname = $req->input('fname');
    $lname = $req->input('lname');
    return view('form_list_submit');
}
}



