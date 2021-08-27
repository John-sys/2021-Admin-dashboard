<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// use Illuminate\Http\Request;

// Route::get('/users/create', function(Request $request){

// });

// Route::get('/users/update', function(Request $request){
    
// });





Route::get('/', function () {   
    return view('login');
});

Route::view("welcome",'welcome')->name('welcome');
// Route::get("login",'login');
Route::view("home",'home');
Route::view("login",'login');
Route::post("/","App\Http\Controllers\AuthController@auth");

