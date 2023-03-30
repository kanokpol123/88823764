<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('home');
});
Route::get('/', [IndexController::class,'index']);


Route::get('/my-controller', [IndexController::class,'show']);

Route::post('/my-controller', function(){
    return "name";
});*/


Route::get('/', [CampTestController::class,'home']);

Route::get('/camp-form-list', [CampTestController::class,'form_list']);

Route::get('/about-me', [CampTestController::class,'about_me']);


Route::post('/my-form/{name}', [FormController::class,'submit']);
