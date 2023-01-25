<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    protected function output($view, $data=[]){
        $data['view'] = $view;
        return view('layout/default', $data);
    }
    //
    function show(){
        $datas['name'] = "test";

        return view('my_view', $datas);
    }
}
