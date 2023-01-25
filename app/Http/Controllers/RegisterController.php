<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends MyController
{
    function index(){
        $data['name'] = "this is my controller : ";
        return parent::output('form/register', $data);
    }

    function create(Request $request){

        

        $data['firstname'] = $request->input('firstname','');
        $data['lastname'] = $request->input('lastname','');
        $data['email'] = $request->input('email','');
        $data['username'] = $request->input('username','');
        $data['password'] = $request->input('password','');

        $users = DB::select('SELECT * FROM migrations');
        DB::insert('INSERT INTO users () value()');
        print_r($users);
        return parent::output('form/register', $data);
    }
}
