<?php

use Illuminate\Support\Facades\Auth;
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
    //return view('welcome');

//    if(Auth::check()){
//
//        return "The User is Logged In";
//    } else{
//
//        return "Please Log In";}





//    $username = 'edwin';
//    $password = '12345678';
//
//    if(Auth::attempt(['username'=>$username, 'password'=>$password])){
//
//        return redirect()->intended();
//
//    }



    Auth::logout();




});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
