<?php

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
    return view('website.contents.home');
});
Route::get('/command/{type}',function($type){
    return Artisan::call($type);
});
<<<<<<< HEAD
Route::get('/services', function(){
    return view('website.contents.services');
});
=======
Route::get('/services',function(){
    return view('website.contents.services');
});


>>>>>>> f6f76849520929929781146277f6ffc87ffad433
