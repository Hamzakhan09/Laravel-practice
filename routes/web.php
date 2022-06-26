<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('layout',['user_name'=> 'Hamza']);
});


Route::get('admin',function(){
    $user_profile = "";
   return view('admin')->with('data',$user_profile);
});

Route::get('/demo/{name}',function($name){
      $data = compact('name');
     return view('demo')->with($data);
});

Route::get('/user', [HomeController::class , 'Index']);

Route::get('/form',function(){
     return view('form');
});


Route::post('/form', [HomeController::class , 'formData']);

