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

// page home
Route::get('/', function () {
    return view('themes.ljn.index');
});

// page contact
Route::get('/contact', function () {
    return view('themes.ljn.pages.contact');
});

Route::get('/post', function(){
    return view('themes.ljn.post');
});

Route::get('/posts', function(){
    return view('themes.ljn.posts');
});
